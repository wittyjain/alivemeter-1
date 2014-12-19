<?php
$dir="";
	if(isset($_GET['dir']))
	{
		$dir=$_GET['dir'];
	}
?>
          

<?php if($dir=="calories/setup2") { ?>
        <div class="dvFloat">
          <div style="float:left;padding:0px 0px 10px 0px"><a href="<?php echo $strHostName;?>/page.php?dir=calories/setup2"><img src="images/calorie_setup/review_goals.png" alt=""></a></div>
        </div>
<?php } else { ?>
     <div class="dvFloat">
       <div style="float:left;padding:0px 0px 10px 0px"><a href="<?php echo $strHostName;?>/page.php?dir=calories/setup2"><img src="images/calorie_setup/review_goals_h.png" alt=""></a></div>
     </div>
 <?php } ?>
 
 
 
  <?php if($dir=="calories/setup4") { ?>
        <div class="dvFloat">
         <div style="float:left;padding:0px 0px 10px 0px"><a href="<?php echo $strHostName;?>/page.php?dir=calories/setup4"><img src="images/calorie_setup/measurements.png" alt=""></a></div>
        </div>
<?php } else { ?>
     <div class="dvFloat">
     <div style="float:left;padding:0px 0px 10px 0px"><a href="<?php echo $strHostName;?>/page.php?dir=calories/setup4"><img src="images/calorie_setup/measurements_h.png" alt=""></a></div>
    </div>
          <?php } ?>