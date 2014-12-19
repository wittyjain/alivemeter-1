<?php
	//$menu_type="";  
	$step1box=""; $step1txt="";   $step2box=""; $step2txt=""; $step3box=""; $step3txt="";
	
	if(isset($_GET['mode'])) {
		$mode = $converter->decode($_GET['mode']);
	}
	else
	{
		$mode="0";
	}
	
	if(isset($_GET['menu_type'])) {
		$menu_type = $converter->decode($_GET['menu_type']);
	}
	else
	{
		$menu_type="0";
	}
	
	if(isset($_GET['record'])) {
		$record = $converter->decode($_GET['record']);
	}
	else
	{
		$record="0";
	}
	
	if(isset($_GET['cid'])) {
		$cid = $converter->decode($_GET['cid']);
	}
	else
	{
		$cid="0";
	}
	
	//Alert ($menu_type);
	
	if($mode=="Edit")
	{
		$strHideTab="display:none;";
	}
	else
	{
		$strHideTab="display:'';";
	}
	
	if($mode=="Add")
	{
		$strHideMainTab="display:none;";
	}
	else
	{
		$strHideMainTab="display:'';";
	}

	if(isset($_GET['dir'])) {
		$dir = $_GET['dir'];
	}
	
	//Alert ($dir);
	
	//$strPageName=GetOnlyPageName();
	
	
	
	 if($dir=="registration/step1"){
		$step1box="class='active'";
		$step1txt="class='Step_title_Red'";
		$step2box="class='past'";
		$step2txt="class='Step_title_Grey'";
		$step3box="class='current'";
		$step3txt="class='Step_title_Grey_small'";
		if($mode=="Edit"){
			$belowline="class='registerstepsline_pers_prof_de'";
		}
		else
		{
			$belowline="class='registerstepsline'";
		}
		
		
		
	 } 
	 
	  if($dir=="registration/verification"){
		$step1box="class='active'";
		$step1txt="class='Step_title_Red'";
		$step2box="class='past'";
		$step2txt="class='Step_title_Grey'";
		$step3box="class='current'";
		$step3txt="class='Step_title_Grey_small'";
		$belowline="class='registerstepsline'";		
	 } 
	 
	 
	 if($dir=="registration/step2"){
		$step2box="class='active'";
		$step2txt="class='Step_title_Red'";
		$step1box="class='past'";
		$step1txt="class='Step_title_Grey'";
		$step3box="class='current'";
		$step3txt="class='Step_title_Grey_small'";
		$belowline="class='registerstepsline_pers_prof_de'";
	 } 
	 
	 if($dir=="registration/step3"){
		$step3box="class='active1'";
		$step3txt="class='Step_title_Red_small'";
		$step2box="class='past'";
		$step2txt="class='Step_title_Grey'";
		$step1box="class='past'";
		$step1txt="class='Step_title_Grey'";
		$belowline="class='registerstepsline_afamilymember'";
	 } 
	 

?>


<div class="dvFloat">
      <div class="dvWrapper">
        <div style="float:left; padding:0px 0px 0px 35px; height:50px; border:solid 0px red;">
          <ul class="registersteps">
          	 <li <?php echo $step1box;?> style="width:350px; <?php echo $strHideMainTab;?>">
              <div>
                <div <?php echo $step1txt;?>><a title="Step 1" style="padding:0px; margin:0px; text-align:left; cursor:pointer;">Personal Details</a></div>
                <span><a>1</a></span><a style="cursor:pointer;"> </a></div>
            </li>
            
            <li <?php echo $step2box;?> style="width:350px; <?php echo $strHideMainTab;?>">
              <div>
                <div <?php echo $step2txt;?>><a style="padding:0px; margin:0px; text-align:left; cursor:pointer;">Professional Details</a></div>
                <span><a>2</a></span><a style="cursor:pointer;"> </a></div>
            </li>
            
           
            <li <?php echo $step3box;?> style="width:237px; <?php echo $strHideTab;?>">
              <div>
                <div <?php echo $step3txt;?>><a style="padding:0px; margin:0px; text-align:left; cursor:pointer;">Align Family Member</a></div>
                <span><a>3</a></span><a style="cursor:pointer;"> </a></div>
            </li>
           
            
            
            <div <?php echo $belowline;?>></div>
          </ul>
        </div>
      </div>
    </div>