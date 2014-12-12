<?php include("../includes/common.inc.php"); ?>
<?php include("includes/links.inc.php"); ?>
<title>View </title>

<link rel="stylesheet" href="<?php echo $strHostName?>/manage/css/jquery-ui-1.8.21.custom.css">
<script src="<?php echo $strHostName?>/js/jquery-1.9.1.js"></script>
<script src="<?php echo $strHostName?>/js/jquery.ui.core.js"></script>
<script src="<?php echo $strHostName?>/js/jquery.ui.widget.js"></script>
<script src="<?php echo $strHostName?>/js/jquery.ui.position.js"></script>
<script src="<?php echo $strHostName?>/js/jquery.ui.menu.js"></script>
<script src="<?php echo $strHostName?>/js/jquery.ui.autocomplete.js"></script>
	<style>
	.ui-autocomplete-loading {
		background: white url('<?php echo $strHostName?>/manage/images/ui-anim_basic_16x16.gif') right center no-repeat;
	}
	</style>
</head>
<?php
$condition="";  $qs="";

	if(isset($_GET['mode'])) {
		if($converter->decode($_GET['mode']) == "trash") {
			$trash = true;
		} else {
			$trash = false;
		}
	} else {
		$trash = false;
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
					$query = "UPDATE ".AdminLogin." SET isdeleted = 1 WHERE id = $id ";
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
					$query = "DELETE FROM ".AdminLogin." WHERE id = $id ";
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
					$query = "UPDATE ".AdminLogin." SET isdeleted = 0 WHERE id = $id ";
					$result = mysql_query($query);
					AlertandRedirect('Clicked record is activated successfully.', "".GetOnlyPageName()."?".$qs);
				}
			}
		}
	}

	
	$active_count = $db->select("SELECT * FROM ".AdminLogin." WHERE isdeleted = 0"); 
	$active_count = $db->row_count;
	$trash_count = $db->select("SELECT * FROM ".AdminLogin." WHERE isdeleted = 1"); 
	$trash_count = $db->row_count;
	
	if($trash == true) {
		$condition .= " and isdeleted = 1 ";
	} else {
		$condition .= " and isdeleted = 0 ";
	}

	if($_SESSION['login_id']!="1")
	{
		$condition=" and id <> 1";
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
		<h4><strong><i class="icon-user"></i>&nbsp; View Users</strong></h4>
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
          <?php if($_SESSION['login_type']=="Admin"){ ?>
	          <div style="float:left; width:50%; text-align:right;">
			 <a href="add_user.php" class="btn btn-info btn-white btn-xs" style="width:150px;">Add User</a>
			
            </div>
    	<?php } ?>        
          </label>
          <table id="dlListing" style="border-bottom:solid 1px #ddd; border-top:0px; text-align:right; width:100%; margin-bottom:25px; display:none;">
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
                                                          <th style="padding:10px;">Name</th>
                                                          <th style="padding:10px;">Email ID</th>
                                                          <?php if($_SESSION['login_type']=="Admin"){ ?>
														  <th style="padding:10px;">User Name</th>
                                                          <th style="padding:10px;">Password</th>
                                                          <?php } ?>
														  <th style="padding:10px;">Type</th>
                                                           <?php if($_SESSION['login_type']=="Admin"){ ?>
                                                          <th style="padding:10px; border-right:solid 0px #bbbbbb; text-align:center;">Actions</th>
                                                          <?php } ?>
                                                      </tr>
                                                  </thead>  
                                                    <?php
														$query = "SELECT * FROM ".AdminLogin." WHERE id <> 0 ".$condition." ORDER BY type,name";
														$result = mysql_query($query);
														if($result != "") {
															$rowcount  = mysql_num_rows($result);
															if($rowcount > 0) {
																while($row = mysql_fetch_assoc($result)) {
																	extract($row);
																	
													?>
                                                    <tr style="border-bottom: dotted 1px #b9d1fd; background-color: <?php echo $bg; ?>;">
                                                        
                                                        <td style="padding:10px;"><?php echo $row['name']; ?></td>
                                                        <td style="padding:10px;"><?php echo $row['email_id']; ?></td>
                                                        <?php if($_SESSION['login_type']=="Admin"){ ?>
                                                            <td style="padding:10px;"><?php echo $row['username']; ?></td>
                                                            <td style="padding:10px;"><?php echo $row['password']; ?></td>
                                                         <?php } ?>
                                                        <td style="padding:10px;"><?php echo $row['type']; ?></td>
                                             		<?php if($_SESSION['login_type']=="Admin"){ ?>
                                                        <td style="border-right:solid 0px #bbbbbb; text-align:center;">
                                                     <a class="editbtn" href="add_user.php?cid=<?php echo $converter->encode($row['id']); ?>" title="Edit"><i class="icon-edit icon-white"></i></a>
															<?php if($row['id']!="1" && $row['id']!="2" ){?>
                                                       <?php if($trash == true) { ?>
                                            <a class="restore" href="javascript:activeRecord('<?php echo GetOnlyPageName(); ?><?php echo $querystring; ?>&m=<?php echo $converter->encode('Active'); ?>&deleteid=<?php echo $converter->encode($row['id']); ?>');" title="Restore"><i class="icon-zoom-in icon-white"></i></a>&nbsp;
                                            
                                            <a class="deletebtn" href="javascript:deleteRecord('<?php echo GetOnlyPageName(); ?><?php echo $querystring; ?>&m=<?php echo $converter->encode('delete'); ?>&deleteid=<?php echo $converter->encode($row['id']); ?>');" title="Delete"><i class="icon-remove-sign"></i></a>
											<?php } else { ?>
                                            <a class="deletebtn" href="javascript:MoveToTrash('<?php echo GetOnlyPageName(); ?><?php echo $querystring; ?>&m=<?php echo $converter->encode('trash'); ?>&deleteid=<?php echo $converter->encode($row['id']); ?>');" title="Delete"><i class="icon-remove-sign"></i></a>
                                            <?php } ?> <?php  } ?>
                                                    </td>
                                                    <?php } ?>
                                                    </tr>
                                                    </tr>
													<?php
                                                                }
                                                            } else {
                                                    ?>
                                                    <tr>
                                                        <td colspan="6" style="color: red;">Sorry! List of Users is empty.</td>
                                                    </tr>
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                </table>
            
            
          </div>
          </div>
        </section>
        
      </div>
      
    </div>
  </section><?php include "includes/footer.inc.php"?>
</section>
<!-- footer -->

<!-- / footer -->








</body>
</html>
