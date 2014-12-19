<?php include "includes/common.inc.php"?>
<link href="<?php echo $strHostName;?>/css/contentslider.css" type="text/css" rel="Stylesheet" />
<script language="javascript" src="<?php echo $strHostName;?>/js/contentslider.js" type="text/javascript"></script>

</head>

<style type="text/css">
.dvBanner
{
	width: 620px; 
     background-position: center center; 
    text-align:right;
    padding-bottom: 30px;
}
</style>
<body>
<?php

if(isset($_GET['cid']))
{
	$cid=$converter->decode($_GET['cid']);
}

else
{
	$cid="0";
}

?>
<center>
<div class="dvFloat">
    <div id="slider1" class="sliderwrapper">
        <?php
			 $query = "SELECT * FROM tbl_doc_consult_gallery WHERE parent_id=".$cid;
												//	echo $query;
													$result = mysql_query($query);
													
													if($result != "") {
														$rowcount  = mysql_num_rows($result);
														if($rowcount > 0) {
															while($row = mysql_fetch_assoc($result)) {
																extract($row);
																$imageid=$row['file_path'];
				if($imageid!="")
				{
					$imageid=$imageid;
				}
				else
				{
					$imageid="noimage.jpg";
				}

?>

        <div class="contentdiv"><img alt="" src="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>" style="border: 0px;" /></div>
      <?php }}} ?>  
    </div>
    <div id="paginate-slider1" class="pagination"></div>
        <script type="text/javascript">
            
        featuredcontentslider.init({
                    
            id: "slider1",  //id of main slider DIV
            
            contentsource: ["inline", ""],  //Valid values: ["inline", ""] or ["ajax", "path_to_file"]
            
            toc: "#increment",  //Valid values: "#increment", "markup", ["label1", "label2", etc]
            
            nextprev: ["Previous", "Next"],  //labels for "prev" and "next" links. Set to "" to hide.
            
            revealtype: "click", //Behavior of pagination links to reveal the slides: "click" or "mouseover"
            
            enablefade: [true, 0.2],  //[true/false, fadedegree]
            
            autorotate: [true, 3000],  //[true/false, pausetime]
            
            onChange: function(previndex, curindex) {  //event handler fired whenever script changes slide
            
            //previndex holds index of last slide viewed b4 current (1=1st slide, 2nd=2nd etc)
            
            //curindex holds index of currently shown slide (1=1st slide, 2nd=2nd etc)
            
            }
            
            })
        </script>
   </center>   
</div>
</body>
</html>
