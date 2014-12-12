<?php
  require_once("db.php");
  $profileId = $_POST['profileId'];
  $profileIdAvailability = UserModel::checkIfProfileIdExist($profileId);
  if(mysql_num_rows($profileIdAvailability) > 0){
  	echo "Sorry, this profile id is already taken, please choose a new one";
  }
  else {
  	echo $profileId." is available";
  }
 ?>
