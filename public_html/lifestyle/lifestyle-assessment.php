<?php
  require_once("db.php");
  if(!$_POST && !$_GET['profile_id']){
    include('userDetailsEntry.html');
  }
  else if($_POST){
    $userDetails = $_POST['userDetails'];
    $profileId = $userDetails[0];
    $emailId = $userDetails[1];
    $mobileNumber = $userDetails[2];
    $registeredUserQuery = UserModel::getRegisteredUsersIdName($profileId, $emailId, $mobileNumber);
    while($row = mysql_fetch_array($registeredUserQuery, MYSQL_ASSOC))
    {
	$firstName = $row["name"];
        $lastName = $row["lastname"];
        $profileId = $row["user_profile_id"];
        echo "<div class = 'registeredUserDetails'>";
        echo "<li>";
        echo "<p>First Name : ".$firstName."&nbsp &nbsp &nbsp Last Name : ".$lastName."&nbsp &nbsp &nbspProfile ID : ".$profileId;
        echo "<div class = 'editRegUser'>";
        echo "<a href = lifestyle-assessment.php?profile_id=".$profileId." style='text-decoration:none'>Edit</a></div>";
        "</p>";
        echo "</li>";
        echo "</div>";
    }
  }
  else if ($_GET){
    $profileId = $_GET["profile_id"];
    $userDetails = "";
    $userCalCounter ="";
    $registeredUserFullDetails = UserModel::getRegisteredUsersFullDetails($profileId);
    if(mysql_num_rows($registeredUserFullDetails)>0)
      $userDetails = mysql_fetch_array($registeredUserFullDetails, MYSQL_ASSOC);
    $userCalorieCounter = UserModel::getUserCalorieCounter($userDetails["user_id"]);
    if(mysql_num_rows($userCalorieCounter)>0){
      $userCalCounter = mysql_fetch_array($userCalorieCounter, MYSQL_ASSOC);
    }
    $userLifeStyle = UserModel::getUserLifeStyle($userDetails["user_id"]);
    if(mysql_num_rows($userLifeStyle)>0){
      $userLife = mysql_fetch_array($userLifeStyle, MYSQL_ASSOC);
    }
    include('userDetailsEntry.html');
  }
?>
 
