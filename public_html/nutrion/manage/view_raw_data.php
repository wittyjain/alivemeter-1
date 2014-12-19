<?php include("../includes/common.inc.php"); ?>
<?php include("includes/links.inc.php"); ?>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.core.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.widget.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.position.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.menu.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.autocomplete.js"></script>
<title>View </title>

 
	<style>
	 
	.newtable
	{
	 width:100%;
	 margin-bottom:5px;
	
	}
	.newtable td
	{
		border:solid 1px #eaedef;
	}
	</style>
    
    
    
<script type="text/javascript">

$(function() {

	 
$("#txtName").autocomplete({
	source:"search_autocomplete.php?type=key",
	minLength: 2,
	select: function( event, ui ) {
		if(ui.item.id=="0" || ui.item.id=="")
		{
			 
		}
		else
		{
			window.location.href="view_raw_data.php?search="+ui.item.value;
		}
	}
	
});
	 
	
});

function Show(i)
{
	
	if (document.getElementById("aPlus1"+i).innerHTML=="+"){
		document.getElementById("trShow"+i).style.display='';	
		document.getElementById("aPlus1"+i).innerHTML="-";
		document.getElementById("aPlus"+i).innerHTML="<img src='images/minus.png'/>";
	} else {
		document.getElementById("trShow"+i).style.display='none';
		document.getElementById("aPlus1"+i).innerHTML="+";
		document.getElementById("aPlus"+i).innerHTML="<img src='images/plusicon.png'/>";
	}

}

</script>
</head>
<?php
$condition=""; $QyertSting=""; $mode=""; $page="1";

	if(isset($_GET['page']))
	{
		if($_GET['page']!="")
		{
			$page=$_GET['page'];
		}
	}
	

	if(isset($_GET['mode'])) {
		if($converter->decode($_GET['mode']) == "trash") {
			$trash = true;
		} else {
			$trash = false;
		}
	} else {
		$trash = false;
	}
	if(isset($_GET['search']))
	{
		if($_GET['search']!="")
		{
			$serach=$_GET['search'];
			$condition=$condition." and ingredientname like '%$serach%'";

		}
	}
	if(isset($_GET['m'])) {
		$mode = $converter->decode($_GET['m']);
		
		if($mode == "trash") {
			if(isset($_GET['deleteid'])) {
				$id = $converter->decode($_GET['deleteid']);
				if(isset($_GET['qs'])) {
					if($_GET['qs'] != "") {
						$qs = $converter->decode($_GET['qs']);
					}
				}
				if($id != "") {
					$query = "UPDATE ".Raw." SET isdeleted = 1 WHERE id = $id ";
					$result = mysql_query($query);
					AlertandRedirect('Clicked record is moved to trash successfully.', "".GetOnlyPageName()."?".$qs);
				}
			}
		} else if($mode == "delete") {
			if(isset($_GET['deleteid'])) {
				$id = $converter->decode($_GET['deleteid']);
				if(isset($_GET['qs'])) {
					if($_GET['qs'] != "") {
						$qs = $converter->decode($_GET['qs']);
					}
				}
				if($id != "") {
					$query = "DELETE FROM ".Raw." WHERE id = $id ";
					$result = mysql_query($query);
					AlertandRedirect('Clicked record is deleted successfully.', "".GetOnlyPageName()."?".$qs);
				}
			}
		} else if($mode == "Active") {
			if(isset($_GET['deleteid'])) {
				$id = $converter->decode($_GET['deleteid']);
				if(isset($_GET['qs'])) {
					if($_GET['qs'] != "") {
						$qs = $converter->decode($_GET['qs']);
					}
				}
				if($id != "") {
					$query = "UPDATE ".Raw." SET isdeleted = 0 WHERE id = $id ";
					$result = mysql_query($query);
					AlertandRedirect('Clicked record is activated successfully.', "".GetOnlyPageName()."?".$qs);
				}
			}
		}
	}

	
	$active_count = $db->select("SELECT * FROM ".Raw." WHERE isdeleted = 0 ".$condition ); 
	$active_count = $db->row_count;
	$trash_count = $db->select("SELECT * FROM ".Raw." WHERE isdeleted = 1 ".$condition); 
	$trash_count = $db->row_count;
	
	if($trash == true) {
		$condition .= " and isdeleted = 1 ";
	} else {
		$condition .= " and isdeleted = 0 ";
	}
?>
<body>
<!-- div -->
<?php include "includes/header.inc.php"?>
<!-- / div -->
<!-- nav -->
<?php include "includes/left.inc.php"?>
<!-- / nav -->
<section id="content">
  <section class="main padder">
  
    <div class="clearfix" style="padding:15px 0;">
		<h4><strong><i class="icon-key"></i>&nbsp; View Key Ingredients</strong></h4>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <div class="panel-body">
          <label class="" style="border:solid 0px red; width:100%; margin-bottom:10px;"> 
          	<div style="float:left; width:50%;">
             <a href="<?php echo GetOnlyPageName(); ?>" class="active"><i class="icon-edit icon-large text-success text-active"></i>
             Active&nbsp;&nbsp;<?php echo $active_count; ?></a>&nbsp;&nbsp;
               
              <a href="?mode=<?php echo $converter->encode("trash") ?>" class="active"><i class="icon-trash icon-large text-success text-active"></i>Trash&nbsp;&nbsp;<?php echo $trash_count; ?></a>
          </div>
          <div style="float:left; width:50%; text-align:right;">
			 <a href="add_raw_data.php" class="btn btn-info btn-white btn-xs" style="width:150px;">Add Key Ingredients</a>
			
            </div>
          </label>
          <table id="dlListing" style="border-bottom:solid 1px #ddd; border-top:0px; text-align:right; width:100%; margin-bottom:25px;">
							<tr>
								
								<td style="padding-bottom:15px;">
                                Search Name :
									 <input type="text" id="txtName" name="txtName" value="" style="width:200px; margin-left:5px; border:solid 1px #ddd; border-radius:5px; padding:3px 0;"/>
								</td>
								

							</tr>
							
						</table>
            <div class="table-responsive">
             <table class="table table-striped b-t text-small">
             
       

                                                  <thead>
                                                   <tr>
                 <?php
							
							
							if($trash == true) {
								$pagingLink = getPagingLinkBackEnd($trash_count, 10, $QyertSting);
								$totalPagesDropDown    = ceil($trash_count / 10);
								//Alert($totalPagesDropDown );
							}
							else
							{
								
								if(isset($_GET['mode'])){$mode=$_GET['mode'];}
								$pagingLink = getPagingLinkBackEnd($active_count, 10, $QyertSting."&mode=".$mode);
								$totalPagesDropDown    = ceil($active_count / 10);
							}

 
								
						?>
                                                      <tr>
														<th style="padding:0px; width:3px;border-right:0px;">&nbsp;</th>
                                                           <th style="padding:9px; width:90%;">Name</th>
														   <th style="padding:9px; border-right:solid 0px #bbbbbb; text-align:right;">Actions</th>
                                                      </tr>
                                                  </thead>  
                                                    <?php
														$query = "SELECT * FROM ".Raw." WHERE id <> 0 ".$condition." ORDER BY ingredientname";
														//echo $query;
														$result = mysql_query(getPagingQuery($query, 10));
														
														if($result != "") {
															$nume = mysql_num_rows($result);
														} else {
															$nume = 0;
														}

														
														
														if($result != "") {
															$rowcount  = mysql_num_rows($result);
															
															if($rowcount > 0) {
																$i=1;
																while($row = mysql_fetch_assoc($result)) {
																	extract($row);
																	
													?>
                                                    <tr style="border-bottom: dotted 0px #b9d1fd;">
														<td>
															<a href="#" id="aPlus1<?php echo $i?>" onClick="javascript:Show('<?php echo $i?>');" style="font-size:18px;font-weight:bold; display:none;">+</a>
                                                            
                                                            <a href="#" id="aPlus<?php echo $i?>" onClick="javascript:Show('<?php echo $i?>');" style="font-size:18px;font-weight:bold;"><img src='images/plusicon.png'/></a>
														</td>
														<td style="padding:9px;">
														<?php echo $row['ingredientname']; ?></td>
													   
											 
														<td style="border-right:solid 0px #bbbbbb; text-align:right; padding-top:10px;">
															<a class="editbtn" href="add_raw_data.php?cid=<?php echo $converter->encode($row['id']); ?>" title="Edit"><i class="icon-edit icon-white"></i></a>
														<?php if($trash == true) { ?>
																<a class="restore" href="javascript:activeRecord('<?php echo GetOnlyPageName(); ?><?php echo $querystring; ?>&m=<?php echo $converter->encode('Active'); ?>&deleteid=<?php echo $converter->encode($row['id']); ?>');"  title="Restore"><i class="icon-zoom-in icon-white"></i></a>&nbsp;
																<a class="deletebtn" href="javascript:deleteRecord('<?php echo GetOnlyPageName(); ?><?php echo $querystring; ?>&m=<?php echo $converter->encode('delete'); ?>&deleteid=<?php echo $converter->encode($row['id']); ?>');"  title="Delete"><i class="icon-remove-sign"></i></a>
														<?php } else { ?>
														<a class="deletebtn" href="javascript:MoveToTrash('<?php echo GetOnlyPageName(); ?><?php echo $querystring; ?>&m=<?php echo $converter->encode('trash'); ?>&deleteid=<?php echo $converter->encode($row['id']); ?>');"  title="Delete"><i class="icon-remove-sign"></i></a>
														<?php } ?>
															</td>
                                                    </tr>
												<tr id="trShow<?php echo $i?>" style="display:none;">
													<td colspan="3" style="border:solid 0px red; padding:0px;">
													 <table cellpadding="0" cellspacing="0" border="0"   class="newtable">
	 
		<tr>
		 
			<td style="padding:9px; background-color:#e4fdf9;">Energy</td>
			<td style="padding:9px; background-color:#e4fdf9;">Carbo</td>
			<td style="padding:9px; background-color:#e4fdf9;">Protein</td>
			<td style="padding:9px; background-color:#e4fdf9;">Total Fat</td>
			<td style="padding:9px; background-color:#e4fdf9;">Fibre</td>
			<td style="padding:9px; background-color:#e4fdf9;">Sodium</td>
			<td style="padding:9px; background-color:#e4fdf9;">Pufa<br /></td>
			<td style="padding:9px; background-color:#e4fdf9;">Mufa</td>
			<td style="padding:9px; background-color:#e4fdf9;">Transfat</td>
			<td style="padding:9px; background-color:#e4fdf9;">Potassium</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT A</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT B1</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT B2</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT B3</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT B6</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT C</td>
			<td style="padding:9px; background-color:#e4fdf9;">VT E </td>
			<td style="padding:9px; background-color:#e4fdf9;">Iron</td>
			<td style="padding:9px; background-color:#e4fdf9;">Calcium </td>
			<td style="padding:9px; background-color:#e4fdf9;">Zinc</td>
			<td style="padding:9px; background-color:#e4fdf9;">Phosphorous</td>
			<td style="padding:9px; background-color:#e4fdf9;">Sugar</td>
		 
		</tr>
        <tr>
		 
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['carbohydrate']?></td>
			<td style="padding:9px;"><?php echo $row['protein']?></td>
			<td style="padding:9px;"><?php echo $row['totalfat']?></td>
			<td style="padding:9px;"><?php echo $row['fibre']?></td>
			<td style="padding:9px;"><?php echo $row['sodium']?></td>
			<td style="padding:9px;"><?php echo $row['pufa']?></td>
			<td style="padding:9px;"><?php echo $row['mufa']?></td>
			<td style="padding:9px;"><?php echo $row['transfat']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?> </td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
			<td style="padding:9px;"><?php echo $row['energy']?></td>
		 
		</tr>
	 
	</table>
				
													</td>
												</tr>
                                                
													<?php

															$i=$i+1;

                                                                }
                                                            } else {
                                                    ?>
                                                    <tr>
                                                        <td colspan="3" style="color: red;">Sorry! List of Key Ingredients is empty.</td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </table>
            
            <div class="row">
            	 
                <div class="col-sm-3 text-center" > <small class="text-muted inline m-t-small m-b-small">showing <?php if($trash==true){?>
									  <?php echo ($nume*$page) ?> of <?php echo  $trash_count?>
								  <?php } else { ?>
										<?php echo ($nume*$page) ?> of <?php echo  $active_count?>
								  <?php } ?> items</small> </div>
                <div class="col-sm-5 text-right text-center-sm" style="width:60%;">
                <ul class="pagination pagination-small m-t-none m-b-none">
                  <li> <?php echo $pagingLink ?></li>
                </ul>
              </div>
             </div>
            
          </div>
          </div>
        </section>
        
      </div>
      
    </div>
   
  </section>
   <?php include "includes/footer.inc.php"?>
</section>
<!-- footer -->

<!-- / footer -->




<script>
Show();
</script>



</body>
</html>
