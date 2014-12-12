<?php
	require_once("db.php");
	$unfilledFlag = false;
	$matchedFlag = false;
	$userFilledDetails = array();
	$userFilledDetails = $_POST['userFilledDetails'];
	$isRegistered = $userFilledDetails[0];
	$firstName = $userFilledDetails[1];
	$profileId = $userFilledDetails[2];
	$gender = $userFilledDetails[3];
	$dobDD = $userFilledDetails[4];
	$dobMM = $userFilledDetails[5];
	$dobYY = $userFilledDetails[6];
	$maritalStatus = $userFilledDetails[7];
	$height = $userFilledDetails[8];
	$heightOption = $userFilledDetails[9];
	$weight = $userFilledDetails[10];
	$mobile = $userFilledDetails[11];
	$emailId = $userFilledDetails[12];
	$pincode = $userFilledDetails[13];
	$earningMember = $userFilledDetails[14];
	$profession = $userFilledDetails[15];
	$company = $userFilledDetails[16];
	$goalWeight = $userFilledDetails[31];
	$setGoal = $userFilledDetails[32];
	$dailyActivities = $userFilledDetails[33];
	$workouts = $userFilledDetails[34];
	$minutesWorkout = $userFilledDetails[35];

	$userUnfilledDetails = array();
	$userMatchedDetails = array();
	$userDetails = array();

	if($firstName=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "First Name");
 		$unfilledFlag = true;
	}
	if($profileId=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Profile ID");
 		$unfilledFlag = true;
	}
	if($gender=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Gender");
 		$unfilledFlag = true;
	}
	if($dobMM=="" || $dobDD == "" || $dobYY == "") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Date of Birth");
 		$unfilledFlag = true;
	}
	if($maritalStatus=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Marital Status");
 		$unfilledFlag = true;
	}
	if($height=="" || $heightOption =="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Height");
 		$unfilledFlag = true;
	}
	if($weight=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Weight");
 		$unfilledFlag = true;
	}
	if($mobile=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Mobile Number");
 		$unfilledFlag = true;
	}
	if($emailId=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Email ID");
 		$unfilledFlag = true;
	}
	if($pincode=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Pincode");
 		$unfilledFlag = true;
	}
	if($earningMember=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Earning Member");
 		$unfilledFlag = true;
	}
	if($profession=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Profession");
 		$unfilledFlag = true;
	}
	if($company=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Company Name");
 		$unfilledFlag = true;
	}
	if($goalWeight=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Goal Weight");
 		$unfilledFlag = true;
	}
	if($setGoal=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Set Goal");
 		$unfilledFlag = true;
	}
	if($dailyActivities=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Daily Activities");
 		$unfilledFlag = true;
	}
	if($workouts=="Select") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Number of Workouts per week");
 		$unfilledFlag = true;
	}
	if($minutesWorkout=="") //any file size, 200 kb in this case
	{
 		array_push($userUnfilledDetails, "Minutes per workout");
 		$unfilledFlag = true;
	}


	if($isRegistered == "false"){
		$profileIds = UserModel::ifProfileIdExists($profileId);
		$emailIds = UserModel::ifEmailIdExists($emailId);
		$mobiles = UserModel::ifMobileExists($mobile);
		if(mysql_num_rows($profileIds)>0){
			array_push($userMatchedDetails, "Profile ID");
			$matchedFlag = true;
		}
		if(mysql_num_rows($emailIds)>0){
			array_push($userMatchedDetails, "Email ID");
			$matchedFlag = true;
		}
		if(mysql_num_rows($mobiles)>0){
			array_push($userMatchedDetails, "Mobile Number");
			$matchedFlag = true;
		}
	}
	if($unfilledFlag == "true"){
		array_unshift($userUnfilledDetails, "Unfilled");
		echo json_encode($userUnfilledDetails);
	}
	else if($matchedFlag == "true"){
		array_unshift($userMatchedDetails, "Matched");
		echo json_encode($userMatchedDetails);
	}
	else{
		array_unshift($userDetails, "WithoutIssue");
		if($isRegistered == "false"){
			$insertUser = UserModel::insertUserDb($_POST['userFilledDetails']);
			$userId = UserModel::getUserIdFromProfileId($profileId);
			$userRow = mysql_fetch_array($userId, MYSQL_ASSOC);
			$age = UserModel::getAge($dobYY."-".$dobMM."-".$dobDD);
			$ageRow = mysql_fetch_array($age, MYSQL_ASSOC);
			$insertCalCounter = UserModel::insertCalorieCounter($_POST['userFilledDetails'], $userRow['user_id'], $ageRow['age']);
			$insertLifeStyleGoals = UserModel::insertLifeStyle($_POST['userFilledDetails'], $userRow['user_id']);
		}
		else{
			$updateUser = UserModel::updateUserDb($_POST['userFilledDetails']);
			$userId = UserModel::getUserIdFromProfileId($profileId);
			$userRow = mysql_fetch_array($userId, MYSQL_ASSOC);
			$age = UserModel::getAge($dobYY."-".$dobMM."-".$dobDD);
			$ageRow = mysql_fetch_array($age, MYSQL_ASSOC);
			$calCounterExist = UserModel::checkIfCalorieCounterExist($userRow['user_id']);
			if(mysql_num_rows($calCounterExist)>0){
				$updateCalCounter = UserModel::updateCalorieCounter($_POST['userFilledDetails'], $userRow['user_id'], $ageRow['age']);
			}
			else{
				$insertCalCounter = UserModel::insertCalorieCounter($_POST['userFilledDetails'], $userRow['user_id'], $ageRow['age']);
			}
			$insertLifeStyleGoals = UserModel::insertLifeStyle($_POST['userFilledDetails'], $userRow['user_id']);
		}
		echo json_encode($userDetails);
	}
?>
