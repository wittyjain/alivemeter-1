<?php include("common.inc.php"); ?>
<?php
/*$data = array();
 
if(isset($_GET['files']))
{  
	$error = false;
	$files = array();
 
	$uploaddir = 'uploads/';
	foreach($_FILES as $file)
	{
		if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
		{
			$files[] = $uploaddir .$file['name'];
		}
		else
		{
		    $error = true;
		}
	}
	$data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
}
else
{
	$data = array('success' => 'Form was submitted', 'formData' => $_POST);
}
//echo $_FILES['fileToUpload']['name'];$random."".$_FILES['fileToUpload']['name']

$uploadDir.$random."".$_FILES[$inputName]['name']
echo json_encode($data);*/
//echo $_POST['cmb_Report_Day_Doc_pres'];

$report_day = mysql_real_escape_string($_POST[ 'cmb_Report_Day_Doc_pres' ]);
$report_month = mysql_real_escape_string($_POST[ 'cmb_Report_Month_Doc_pres' ]);
$report_year = mysql_real_escape_string($_POST[ 'cmb_Report_Year_Doc_pres' ]);
$test_name = mysql_real_escape_string($_POST[ 'txt_Test_Name' ]);
$lab_name = mysql_real_escape_string($_POST[ 'txt_Lab_Name' ]);
$report_type = mysql_real_escape_string($_POST[ 'cmb_Prescription_Reports_Doc_pres' ]);


if(isset($_POST['txt_Health_Problem']))
{
	$health_problem = mysql_real_escape_string($_POST[ 'txt_Health_Problem' ]);

}
else
{
	$health_problem = "0";
}

$lab_result="Yes";

$type = mysql_real_escape_string($_POST[ 'txt_Type' ]);

$random = mysql_real_escape_string($_GET[ 'RandomID' ]);
$id = mysql_real_escape_string($_POST[ 'txt_UploadID' ]);

$random_id = mysql_real_escape_string($_GET[ 'RandomID' ]);

if($_FILES['fileToUpload']['name']!="")
{
	$file_path = $random."".$_FILES['fileToUpload']['name'];
}

$report_date = $report_year."-".$report_month."-".$report_day;
//uploadFile('fileToUpload', '../uploads/'.$random."".$_FILES['fileToUpload']['name'], $_GET['ID']);

uploadFile('fileToUpload', '../uploads/', $random);

$created_date=date('d-m-Y h:i:s');				
$update_date=date('d-m-Y h:i:s');

$userid="0";
if(isset($_SESSION['UserID']))
{
	$userid=$_SESSION['UserID'];
}
				

		$data = array(
			'report_day' => $report_day,
			'report_month'=>$report_month,
			'report_year'=>$report_year,
			'report_date'=>$report_date,
			'type'=>$type,
			'file_path'=>$file_path,
			'report_type'=>$report_type,
			'health_problem'=>$health_problem,
			'lab_result'=>$lab_result,
			'test_name'=>$test_name,
			'lab_name'=>$lab_name,
			'isactive'=>1,
			'isdelete'=>0,
			'created_by'=>$userid,
			'created_date'=>$created_date,
			'updated_by'=>$userid,
			'userid'=>$userid,
			'update_date'=>$update_date,
			'parent_id'=>$random_id,
		);
		
		if($id == "" || $id==0) {
			$id=$db->insert_array("tbl_doc_consult_gallery", $data);
			echo $id;
		}
		else
		{
			$rows = $db->update_array("tbl_doc_consult_gallery", $data, "id = $id");
		}
		//echo $report_day.$report_month.$report_year.$file_path.$report_type.$test_name.$lab_name.$userid.$update_date.$created_date.$random;
			
?>

