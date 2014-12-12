<?php
$md_count=GetValue("select count(doctor_id) as col from tbl_doctor where type='MD' and hospital_name=".$hospital_id, "col");
$doctor_count=GetValue("select count(doctor_id) as col from tbl_doctor where type='Doctor' and hospital_name=".$hospital_id, "col");
$patient_count=GetValue("select count(doctor_id) as col from tbl_patients where doctor_id in (select doctor_id from tbl_doctor where hospital_name=".$hospital_id.")", "col");
$clerk_count=GetValue("select count(*) as col from tbl_clerk where type='Clerk' and hospital_name=".$hospital_id, "col");
?>

<div class="DvFloat" style="border: solid 0px #0066CC; padding-bottom:25px; ">
  <table border="0" cellspacing="0" cellpadding="0" style="width:600px; font-weight:normal; font-size:12px; line-height:20px;">
    <tr>
      <td scope="col" style="width:70px;">Total Doctors : <?php echo $doctor_count;?></td>
      <td scope="col" style="width:70px;">Total MD : <?php echo $md_count;?></td>
      <td scope="col" style="width:70px;">Total Patients : <?php echo $patient_count;?></td>
      <td scope="col" style="width:70px;">Total Clerks : <?php echo $clerk_count;?></td>
    </tr>
  </table>
</div>
