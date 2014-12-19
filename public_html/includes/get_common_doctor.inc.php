<?php include "common.inc.php";?>
<?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>

  <option value="0">Select Doctor</option>
  <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
  <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
  <?php }?>
