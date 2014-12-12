
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../includes/common.inc.php"); ?>
<?php include("includes/links.inc.php"); ?>
<title>View Gallery<?php echo $strPageTitle; ?></title>
<meta name="keywords" content="<?php echo $strPageKeywords; ?>" />
<meta name="description" content="<?php echo $strPageDescription; ?>" />
</head>
<body>
<!-- div -->
<?php include "includes/header.inc.php"?>
<!-- / div -->
<!-- nav -->
<?php include "includes/left.inc.php"?>
<!-- / nav -->
<section id="content">
<section class="main padder">
<div class="row" style="padding:20px 0px 0px 15px; display:none;">
  <div style="float:left; width:10%; text-align:right;"> <a href="#" class="btn btn-info btn-white btn-xs" style="width:130px;">Total Celebrity (10)</a> </div>
  <div style="float:left; width:15%; text-align:right;"> <a href="#" class="btn btn-info btn-white btn-xs" style="width:150px;"> Total Work Manage (3) </a> </div>
  <div style="float:left; width:15%; text-align:right;"> <a href="#" class="btn btn-info btn-white btn-xs" style="width:170px;">Total Casting Manager (2) </a> </div>
  <div style="float:left; width:15%; text-align:right;"> <a href="#" class="btn btn-info btn-white btn-xs" style="width:170px;">Total Digital Managear (2)
</a> </div>
</div>
<div class="row" style="padding-top:15px;"> 
<div class="col-sm-4" style="display:none;">
  <section class="panel"> 
  <div class="panel-body">
    <div class="table-responsive">
      <h4><strong><i class="icon-edit"></i>&nbspLatest Endorsement </strong></h4>
    </div>
    <table class="table table-striped b-t text-small">
      <thead>
        <tr>
          <th style="border-left:solid 1px #e0e4e8;">Date</th>
          <th>Title</th>
          <th style="border-right:solid 1px #e0e4e8;">Type</th>
        </tr>
      </thead>
      <tbody>
        
         <?php
			$query = "SELECT * FROM ".Work." WHERE id <> 0 order by date desc limit 3";
			//Alert ($workid);
			//echo $query;
			$result = mysql_query($query);
			if($result != "") {
				$rowcount  = mysql_num_rows($result);
				if($rowcount > 0) {
					while($row = mysql_fetch_assoc($result)) {
						extract($row);
		?>
        
        
        
		
        <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
          <td><?php echo date('d-m-Y',strtotime($row['date']));?></td>
           <td><?php echo $row['work_title'];?></td>
            <td><?php echo $row['work_type'];?></td>
        </tr>
        
        <?php } } } ?>
      </tbody>
    </table>
    <div style="text-align:right; color:#990000"><a href="<?php echo $strHostName;?>/manage/view_work_profile.php" style=" color:#990000">View More..</a> </div>
    </section>
  </div>
  <div class="col-sm-4" style="display:none;">
    <section class="panel">
      <div class="panel-body">
        <div class="table-responsive">
          <h4><strong><i class="icon-edit"></i>&nbspUntag Request </strong></h4>
          <table class="table table-striped b-t text-small">
            <thead>
              <tr>
                <th style="border-left:solid 1px #e0e4e8;">Date</th>
                <th>Title</th>
                <th style="border-right:solid 1px #e0e4e8;">Type</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>26-12-2013</td>
                <td>Salman Khan </td>
                <td> Celebrity </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>25-12-2013</td>
                <td>Aishwarya Rai </td>
                <td> Celebrity </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>24-12-2013</td>
                <td>Atul Sharma </td>
                <td> Photographer </td>
              </tr>
            </tbody>
          </table>
          <div style="text-align:right; color:#990000"><a href="#" style=" color:#990000">View More..</a></div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-sm-4" style="display:none;">
    <section class="panel">
      <div class="panel-body">
        <div class="table-responsive">
          <h4><strong><i class="icon-edit"></i>&nbspLatest Registration For Approval </strong></h4>
          <table class="table table-striped b-t text-small">
            <thead>
              <tr>
                <th style="border-left:solid 1px #e0e4e8;">Date</th>
                <th>Title</th>
                <th style="border-right:solid 1px #e0e4e8;">Type</th>
              </tr>
            </thead>
            <tbody>
                <?php
					$query = "SELECT * FROM tbl_celebrities WHERE id <> 0 order by create_date desc limit 3";
					//Alert ($workid);
					//echo $query;
					$result = mysql_query($query);
					if($result != "") {
						$rowcount  = mysql_num_rows($result);
						if($rowcount > 0) {
							while($row = mysql_fetch_assoc($result)) {
								extract($row);
				?>
				
				
				
				
				<tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
				  <td><?php echo date('d-m-Y',strtotime($row['create_date']));?></td>
				   <td><?php echo $row['name'];?></td>
					<td><?php echo $row['genre1'];?></td>
				</tr>
				
				<?php } } } ?>
            </tbody>
          </table>
          <div style="text-align:right; color:#990000"><a href="<?php echo $strHostName;?>/manage/viewcelebrity.php?menu_type=<?php echo $converter->encode("Celebrity")?>" style=" color:#990000">View More..</a></div>
        </div>
      </div>
    </section>
  </div>
</div>
<div class="row" style="display:none;">
  <div class="col-sm-4">
    <section class="panel">
      <div class="panel-body">
        <div class="table-responsive">
          <h4><strong><i class="icon-edit"></i>&nbspMost Viewed Profile </strong></h4>
          <table class="table table-striped b-t text-small">
            <thead>
              <tr>
                <th style="border-left:solid 1px #e0e4e8;">Name</th>
                <th style="border-right:solid 1px #e0e4e8;">No. of Types</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>Parineeti Chopra </td>
                <td> 150 </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>Salman Khan </td>
                <td> 150 </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>Amitabh Bachchan </td>
                <td> 100 </td>
              </tr>
            </tbody>
          </table>
          <div style="text-align:right; color:#990000"><a href="#" style=" color:#990000">View More..</a></div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-sm-4">
    <section class="panel">
      <div class="panel-body">
        <div class="table-responsive">
          <h4><strong><i class="icon-edit"></i>&nbspMessages </strong></h4>
          <table class="table table-striped b-t text-small">
            <thead>
              <tr>
                <th style="border-left:solid 1px #e0e4e8;">Date</th>
                <th>Title</th>
                <th style="border-right:solid 1px #e0e4e8;">Contact Person</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>26-12-2013</td>
                <td>Shahrukh Khan </td>
                <td> Sunil Mehta </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>25-12-2013</td>
                <td>Salman Khan </td>
                <td> Nikhil Arora </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>24-12-2013</td>
                <td>Parineeti Chopra </td>
                <td> Uday chopra </td>
              </tr>
            </tbody>
          </table>
          <div style="text-align:right; color:#990000"><a href="#" style=" color:#990000">View More..</a></div>
        </div>
      </div>
    </section>
  </div>
  <div class="col-sm-4">
    <section class="panel">
      <div class="panel-body">
        <div class="table-responsive">
          <h4><strong><i class="icon-edit"></i>&nbspContacts </strong></h4>
          <table class="table table-striped b-t text-small">
            <thead>
              <tr>
                <th style="border-left:solid 1px #e0e4e8;">Date</th>
                <th>Name</th>
                <th style="border-right:solid 1px #e0e4e8;">Contact Person</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>26-12-2013</td>
                <td>Shahrukh Khan </td>
                <td> Sunil Mehta </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>25-12-2013</td>
                <td>Salman Khan </td>
                <td> Nikhil Arora </td>
              </tr>
              <tr style="border-bottom:solid 1px #e0e4e8;  border-left:solid 1px #e0e4e8;  border-right:solid 1px #e0e4e8; background-color:#fcfdfe ">
                <td>24-12-2013</td>
                <td>Parineeti Chopra </td>
                <td> Uday chopra </td>
              </tr>
            </tbody>
          </table>
          <div style="text-align:right; color:#990000"><a href="#" style=" color:#990000">View More..</a></div>
        </div>
      </div>
    </section>
  </div>
</div>
</section>
</section>
<!-- footer -->
<?php include "includes/footer.inc.php"?>
<!-- / footer -->
</body>
</html>
