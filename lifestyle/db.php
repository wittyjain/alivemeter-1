<?php
require_once("DBSingleton.php");
class UserModel
{
    public function __construct()
    {
        parent::__construct();
    }
    public static function getRegisteredUsersIdName($profileId, $emailId, $mobileNumber)
    {
        return DBConnection::getData("SELECT t.user_profile_id, t.name, t.lastname
            FROM tbl_users t WHERE t.user_profile_id = '".$profileId."' OR t.user_email = '".$emailId."' OR t.mobile = '".$mobileNumber."' ");
    }
    public static function getRegisteredUsersFullDetails($profileId)
    {
        return DBConnection::getData("SELECT *
            FROM tbl_users t WHERE t.user_profile_id = '".$profileId."' ");
    }
    public static function ifProfileIdExists($profileId)
    {
        return DBConnection::getData("SELECT *
            FROM tbl_users t WHERE t.user_profile_id = '".$profileId."' ");
    }
    public static function ifMobileExists($mobile)
    {
        return DBConnection::getData("SELECT *
            FROM tbl_users t WHERE t.mobile = '".$mobile."' ");
    }
    public static function ifEmailIdExists($emailId)
    {
        return DBConnection::getData("SELECT *
            FROM tbl_users t WHERE t.user_email = '".$emailId."' ");
    }
    public static function insertUserDb($userFilledDetails)
    {
        $dateOfBirth = $userFilledDetails[6]."-".$userFilledDetails[5]."-".$userFilledDetails[4]." 00:00:00";
        date_default_timezone_set("Asia/Calcutta");
        $registrationDate = date("Y-m-d H:i:s");
        return DBConnection::getData
        ("INSERT INTO 
            tbl_users (`user_id`, `image1`, `dob`, `dob_day`, `dob_month`, `dob_year`, `user_profile_id`, `user_type`, `random`, `refer_by`, 
                `registration_date`, `registration_type`, `adhar_card_no`, `pancard`, `address1`, `address2`, `landmark`, `pincode`, `user_email`, 
                `password`, `gender`, `name`, `lastname`, `marital_status`, `company_name`, `p_std_code`, `p_area`, `p_address1`, `p_address2`, `p_address3`, 
                `country_id`, `state_id`, `city_id`, `location_id`, `zip_code`, `website`, `phone`, `m_std_code`, `mobile`, `isactive`, `isblock`, `createdby`, 
                `createdate`, `updatedby`, `updatedate`, `update_times`, `isdeleted`, `height`, `height_type`, `weight`, `blood_group`, `earning_member`, `profession_id`, 
                `designation`, `life_expectancy`, `travel_mode`, `daily_travel_time_h`, `daily_travel_time_m`, `age_of_retirement`, `relation_id`, `parent_id`, 
                `verification`, `accountholder`) 
            VALUES 
            (NULL, 'noimage.jpg', '".$dateOfBirth."', ".$userFilledDetails[4].", ".$userFilledDetails[5].", ".$userFilledDetails[6].", '".$userFilledDetails[2]."', 'Premium', NULL, 12345, 
                '".$registrationDate."', 'Main', '".$userFilledDetails[24]."', '".$userFilledDetails[25]."', '".$userFilledDetails[21]."', '".$userFilledDetails[22]."',
                '".$userFilledDetails[23]."', '".$userFilledDetails[13]."', '".$userFilledDetails[12]."', 'cJ10REajMPGsFhOEJL4RV4iMlZtRqpWU6651-rlMJrA', 
                '".$userFilledDetails[3]."', '".$userFilledDetails[1]."', '".$userFilledDetails[30]."', '".$userFilledDetails[7]."', '".$userFilledDetails[16]."', 
                '".$userFilledDetails[18]."', '".$userFilledDetails[19]."', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '".$userFilledDetails[20]."', ' ', '".$userFilledDetails[11]."', 
                1, NULL, 0, '".$registrationDate."', 0, '".$registrationDate."', 0, 0, '".$userFilledDetails[8]."', '".$userFilledDetails[9]."', '".$userFilledDetails[10]."', '".$userFilledDetails[17]."',
                '".$userFilledDetails[14]."', ".$userFilledDetails[15].", '".$userFilledDetails[26]."', '', '".$userFilledDetails[27]."', '".$userFilledDetails[28]."', '".$userFilledDetails[29]."', 
                '', 0, 0, '12345', NULL)"
        );
    }
    public static function getUserCalorieCounter($userId)
    {
        return DBConnection::getData("SELECT t.goal_wgt, t.target_goal, t.daily_activity, t.plan_week, t.plan_hour
            FROM tbl_calorie t WHERE t.user_id = '".$userId."' ");
    }
    public static function getUserLifeStyle($userId)
    {
        return DBConnection::getData("SELECT t.spirit_goal, t.beer_goal, t.cigarette_goal, t.life_style_sleep_goal 
            FROM tbl_life_style t WHERE t.user_id = '".$userId."' AND t.isactive = 1 AND t.isdeleted = 0 ORDER BY t.created_date DESC LIMIT 0,1");
    }
    public static function getUserIdPasswordFromProfileId($profileId)
    {
        return DBConnection::getData("SELECT t.user_id, t.password FROM tbl_users t where t.user_profile_id = '".$profileId."' ");
    }
    public static function getAge($birthDate)
    {
        return DBConnection::getData("SELECT TIMESTAMPDIFF(YEAR, '".$birthDate."', CURDATE()) AS age");
    }
    public static function checkIfProfileIdExist($profileId)
    {
        return DBConnection::getData("SELECT t.user_id FROM tbl_users t where t.user_profile_id = '".$profileId."' ");
    }
    public static function insertCalorieCounter($userFilledDetails, $userId, $age)
    {
        $dateOfBirth = $userFilledDetails[6]."-".$userFilledDetails[5]."-".$userFilledDetails[4]." 00:00:00";
        date_default_timezone_set("Asia/Calcutta");
        $registrationDate = date("Y-m-d H:i:s");
        return DBConnection::getData
        ("INSERT INTO tbl_calorie
            (`calorie_id`, `curr_wgt`, `goal_wgt`, `target_goal`, `curr_height`, `cur_height_type`, `gender`, `age`, 
                `dob_day`, `dob_month`, `dob_year`, `daily_activity`, `plan_week`, `plan_hour`, `user_id`, `isdeleted`, `created_date`, `created_by`, `updated_date`, 
                `updated_by`, `isactive`, `dob`, `sort`) 
        VALUES (NULL, ".$userFilledDetails[10].", ".$userFilledDetails[31].", '".$userFilledDetails[32]."', ".$userFilledDetails[8].", '".$userFilledDetails[9]."', 
            '".$userFilledDetails[3]."', '".$age."', ".$userFilledDetails[4].", ".$userFilledDetails[5].", ".$userFilledDetails[6].", '".$userFilledDetails[33]."', 
            ".$userFilledDetails[34].", ".$userFilledDetails[35].", ".$userId.", 0, '".$registrationDate."', ".$userId.", '".$registrationDate."', ".$userId.", 1, '".$dateOfBirth."', NULL)");
    }
    public static function insertLifeStyle($userFilledDetails, $userId)
    {
        date_default_timezone_set("Asia/Calcutta");
        $updateDate = date("Y-m-d H:i:s");
        $updateDay = date("d");
        $updateMonth = date("m");
        $updateYear = date("Y");
        $lifestyleDate = date("Y-m-d");
        return DBConnection::getData("INSERT INTO tbl_life_style 
            (`life_style_id`, `spirit`, `spirit_goal`, `beer`, `beer_goal`, `cigarette`, `cigarette_goal`, `life_style_sleep`, `life_style_sleep_goal`, 
                `physical_stress`, `physical_stress_details`, `mental_stress`, `mental_stress_details`, `life_style_day`, `life_style_month`, `life_style_year`, 
                `life_style_date`, `isactive`, `isdeleted`, `user_id`, `created_by`, `created_date`, `updated_by`, `updated_date`) 
        VALUES (NULL, '', '".$userFilledDetails[36]."', '', '".$userFilledDetails[37]."', '', '".$userFilledDetails[38]."', '', '".$userFilledDetails[39]."', 
            'NA', '', 'NA', '', ".$updateDay.", ".$updateMonth.", ".$updateYear.", '".$lifestyleDate."', 1, 0, ".$userId.", ".$userId.", 
            '".$lifestyleDate."', ".$userId.", '".$updateDate."')
        ");
    }
    public static function checkIfCalorieCounterExist($userId){
        return DBConnection::getData("SELECT * FROM tbl_calorie t where t.user_id = '".$userId."' ");
    }
    public static function updateUserDb($userFilledDetails)
    {
        $dateOfBirth = $userFilledDetails[6]."-".$userFilledDetails[5]."-".$userFilledDetails[4]." 00:00:00";
        date_default_timezone_set("Asia/Calcutta");
        $registrationDate = date("Y-m-d H:i:s");
        return DBConnection::getData
        (" UPDATE tbl_users SET
            `image1` = 'noimage.jpg', `dob` =  '".$dateOfBirth."' , `dob_day` = ".$userFilledDetails[4].", `dob_month` = ".$userFilledDetails[5].", 
            `dob_year` = ".$userFilledDetails[6].", `user_profile_id` = '".$userFilledDetails[2]."', `user_type` = 'Premium', `random` = NULL, `refer_by` = 12345, 
            `registration_date` = '".$registrationDate."', `registration_type` = 'Main', `adhar_card_no` = '".$userFilledDetails[24]."', `pancard` = '".$userFilledDetails[25]."',
            `address1` = '".$userFilledDetails[21]."', `address2` = '".$userFilledDetails[22]."', `landmark` = '".$userFilledDetails[23]."', 
            `pincode` = '".$userFilledDetails[13]."', `user_email` = '".$userFilledDetails[12]."', `password` = 'cJ10REajMPGsFhOEJL4RV4iMlZtRqpWU6651-rlMJrA', 
            `gender` = '".$userFilledDetails[3]."', `name` = '".$userFilledDetails[1]."', `lastname` = '".$userFilledDetails[30]."', `marital_status` = '".$userFilledDetails[7]."', 
            `company_name` = '".$userFilledDetails[16]."' , `p_std_code` = '".$userFilledDetails[18]."', `p_area` = '".$userFilledDetails[19]."', `p_address1` = NULL, `p_address2` = NULL, `p_address3` = NULL, 
            `country_id` = NULL, `state_id` = NULL, `city_id` = NULL, `location_id` = NULL, `zip_code` = NULL, `website` = NULL, `phone` ='".$userFilledDetails[20]."',
            `m_std_code` = ' ', `mobile` = '".$userFilledDetails[11]."', `isactive` = 1, `isblock` = NULL, `createdby` = 0, 
            `createdate` = '".$registrationDate."', `updatedby` = 0, `updatedate` = '".$registrationDate."', `update_times` = 0, `isdeleted` = 0, 
            `height` = '".$userFilledDetails[8]."', `height_type` = '".$userFilledDetails[9]."', `weight` = ".$userFilledDetails[10].", `blood_group` = '".$userFilledDetails[17]."', 
            `earning_member` = '".$userFilledDetails[14]."', `profession_id` = ".$userFilledDetails[15].", `designation` = '".$userFilledDetails[26]."', `life_expectancy` = '', 
            `travel_mode` = '".$userFilledDetails[27]."', `daily_travel_time_h` = '".$userFilledDetails[28]."', `daily_travel_time_m` = '".$userFilledDetails[29]."', `age_of_retirement` = ' ', `relation_id` = 0, `parent_id` = 0, 
            `verification` = '12345', `accountholder` = NULL WHERE user_profile_id = '".$userFilledDetails[2]."' ");
    }
    public static function updateCalorieCounter($userFilledDetails, $userId, $age)
    {
        $dateOfBirth = $userFilledDetails[6]."-".$userFilledDetails[5]."-".$userFilledDetails[4]." 00:00:00";
    date_default_timezone_set("Asia/Calcutta");
    $registrationDate = date("Y-m-d H:i:s");
    return DBConnection::getData
    ("UPDATE tbl_calorie SET
        `curr_wgt` = ".$userFilledDetails[10].", `goal_wgt` = ".$userFilledDetails[31].", `target_goal` = '".$userFilledDetails[32]."', 
        `curr_height` = ".$userFilledDetails[8].", `cur_height_type` = '".$userFilledDetails[9]."', `gender` = '".$userFilledDetails[3]."', `age` = '".$age."', 
        `dob_day` =  ".$userFilledDetails[4].", `dob_month` = ".$userFilledDetails[5].", `dob_year` = ".$userFilledDetails[6].", `daily_activity` = ".$userFilledDetails[33].",  
        `plan_week` = ".$userFilledDetails[34].", `plan_hour` = ".$userFilledDetails[35].", `user_id` = ".$userId.", `isdeleted` = 0, 
        `created_date` = '".$registrationDate."', `created_by` = ".$userId.", `updated_date` = '".$registrationDate."', `updated_by` = ".$userId.", 
        `isactive` = 1, `dob` = '".$dateOfBirth."', `sort` = NULL
            WHERE user_id = '".$userId."' ");
    }
    public static function checkIfNADone($userId, $healthSetupTab){
        return DBConnection::getData("SELECT * FROM  tbl_user_not_applicable WHERE  `type` LIKE  '".$healthSetupTab."' AND  `user_id` = ".$userId." ");
    }
    public static function insertHealthSetup ($userId, $healthSetupTab){
        date_default_timezone_set("Asia/Calcutta");
        $registrationDate = date("Y-m-d H:i:s");
        return DBConnection::getData("INSERT INTO tbl_user_not_applicable (`id`, `not_applicable`, `type`, `isactive`, `user_id`, 
            `isdeleted`, `createdate`, `createdby`, `updatedate`, `updatedby`) 
        VALUES (NULL, 'NA', '".$healthSetupTab."', 1, ".$userId.", 0, '".$registrationDate."', ".$userId.", '".$registrationDate."', ".$userId.")");
    }
    public static function checkIfNutriAligned($userId){
        return DBConnection::getData(
            "SELECT * FROM `tbl_nutritionist_main` WHERE `user_id` = ".$userId." "
        );
    }
    public static function alignToNutritionist($userId){
        return DBConnection::getData(
            "INSERT INTO tbl_nutritionist_main (`nut_id`, `nutritionist_id`, `user_id`) VALUES (NULL, 191, ".$userId.")"
        );
    }
}
?>
