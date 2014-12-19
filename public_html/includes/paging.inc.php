<?php
function checkRequiredPost($requiredField) {
	$numRequired = count($requiredField);
	$keys        = array_keys($_POST);
	
	$allFieldExist  = true;
	for ($i = 0; $i < $numRequired && $allFieldExist; $i++) {
		if (!in_array($requiredField[$i], $keys) || $_POST[$requiredField[$i]] == '') {
			$allFieldExist = false;
		}
	}
	
	return $allFieldExist;
}

function getShopConfig()
{
	// get current configuration
	$sql = "SELECT sc_name, sc_address, sc_phone, sc_email, sc_shipping_cost, sc_order_email, cy_symbol 
			FROM tbl_shop_config sc, tbl_currency cy
			WHERE sc_currency = cy_id";
	$result = dbQuery($sql);
	$row    = dbFetchAssoc($result);

    if ($row) {
        extract($row);
	
        $shopConfig = array('name'           => $sc_name,
                            'address'        => $sc_address,
                            'phone'          => $sc_phone,
                            'email'          => $sc_email,
				    'sendOrderEmail' => $sc_order_email,
                            'shippingCost'   => $sc_shipping_cost,
                            'currency'       => $cy_symbol);
    } else {
        $shopConfig = array('name'           => '',
                            'address'        => '',
                            'phone'          => '',
                            'email'          => '',
				    'sendOrderEmail' => '',
                            'shippingCost'   => '',
                            'currency'       => '');    
    }

	return $shopConfig;						
}

function displayAmount($amount)
{
	global $shopConfig;
	return $shopConfig['currency'] . number_format($amount);
}

/*
	Join up the key value pairs in $_GET
	into a single query string
*/
function queryString()
{
	$qString = array();
	
	foreach($_GET as $key => $value) {
		if (trim($value) != '') {
			$qString[] = $key. '=' . trim($value);
		} else {
			$qString[] = $key;
		}
	}
	
	$qString = implode('&', $qString);
	
	return $qString;
}

/*
	Put an error message on session 
*/
function setError($errorMessage)
{
	if (!isset($_SESSION['plaincart_error'])) {
		$_SESSION['plaincart_error'] = array();
	}
	
	$_SESSION['plaincart_error'][] = $errorMessage;

}

/*
	print the error message
*/
function displayError()
{
	if (isset($_SESSION['plaincart_error']) && count($_SESSION['plaincart_error'])) {
		$numError = count($_SESSION['plaincart_error']);
		
		echo '<table id="errorMessage" width="550" align="center" cellpadding="20" cellspacing="0"><tr><td>';
		for ($i = 0; $i < $numError; $i++) {
			echo '&#8226; ' . $_SESSION['plaincart_error'][$i] . "<br>\r\n";
		}
		echo '</td></tr></table>';
		
		// remove all error messages from session
		$_SESSION['plaincart_error'] = array();
	}
}

/**************************
	Paging Functions
***************************/

function getPagingQuery($sql, $itemPerPage = 10,$newpagenumber='')
{

	 if($newpagenumber=="")
	{
		if(isset($_GET['page']))
		{
			$newpagenumber=$_GET['page'];
		}
		else
		{
			$newpagenumber="";
		}
	}

	/*if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		$page = (int)$_GET['page'];
	} else {
		$page = 1;
	}*/

	if ($newpagenumber > 0) {
		$page = $newpagenumber;//(int)$_GET['page'];
	} else {
		$page = 1;
	}
	
	// start fetching from this row number
	$offset = ($page - 1) * $itemPerPage;
	//Alert($page);
	
	return $sql . " LIMIT $offset, $itemPerPage";
}

/*
	Get the links to navigate between one result page to another.
	Supply a value for $strGet if the page url already contain some
	GET values for example if the original page url is like this :
	
	http://www.phpwebcommerce.com/plaincart/index.php?c=12
	
	use "c=12" as the value for $strGet. But if the url is like this :
	
	http://www.phpwebcommerce.com/plaincart/index.php
	
	then there's no need to set a value for $strGet
	
	
*/
function getPagingLink($sql, $itemPerPage = 10, $strGet = '',$newpagenumber ='')
{

	$result        = mysql_query($sql);
	$pagingLink    = '';
	$totalResults  = mysql_num_rows($result);
	$totalPages    = ceil($totalResults / $itemPerPage);
	
	// how many link pages to show
	$numLinks      = 7;
	 if($newpagenumber=="")
	{
		$newpagenumber=$_GET['page'];
	}
		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
	
		$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		

		//if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		if ($newpagenumber > 0) {
			$pageNumber = $newpagenumber;//(int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = "<a  href=\"$self?page=$page&$strGet\">Previous</a>&nbsp;&nbsp;";
			} else {
				$prev = "<a href=\"$self?$strGet\">Previous</a>&nbsp;&nbsp;";
			}	
				
			$first = '<span style="padding-right:7px;float:left;"> <a style="color:blue;font-family:Tahoma;font-size:12px;" href=\"$self?$strGet\">[First]</a></div>';
		} else {
			$prev  = '<span class="disabled">Previous</span>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<span class="disabled">First</span>'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;<a href=\"$self?page=$page&$strGet\">Next</a>&nbsp;&nbsp;";
			$last = "<a href=\"$self?page=$totalPages&$strGet\">[Last]</a>";
		} else {
			$next = '&nbsp;&nbsp;<span class="disabled">Next</span>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<span class="disabled">Last</span>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = " <span class='selected'>$page</span>";   // no need to 
				}
				else
				{
					$pagingLink[] = " <span class='selected'>$page</span>";   // no need to 
				}
				//create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = "<a href=\"$self?$strGet\">$page</a>";
				} else {	
					if($page < 10)
					{
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\">$page</a>";
					}
					else
					{
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\">$page</a>";


					}
				}	
			}
	
		}
		
		//$pagingLink ="<b>Paging<b>&nbsp;&nbsp;". implode(' | ', $pagingLink);
		$pagingLink =implode('&nbsp;&nbsp;', $pagingLink);
		 
		// return the page navigation link
		$pagingLink =$prev.$pagingLink.$next;
	}
	
	return $pagingLink;
}

function getPagingLinkFront($sql, $itemPerPage = 10, $strGet = '',$newpagenumber ='')
{

	//$result        = mysql_query($sql);
	$pagingLink    = '';
	$totalResults=$sql;
	$totalPages    = ceil($totalResults / $itemPerPage);
	
	// how many link pages to show
	$numLinks      = 7;
	 if($newpagenumber=="")
	{
		$newpagenumber=$_GET['page'];
	}
		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 1) {
	
		$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		

		//if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		if ($newpagenumber > 0) {
			$pageNumber = $newpagenumber;//(int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = "<a  href=\"$self?page=$page&$strGet\">Previous</a>&nbsp;&nbsp;";
			} else {
				$prev = "<a href=\"$self?$strGet\">Previous</a>&nbsp;&nbsp;";
			}	
				
			$first = '<span style="padding-right:7px;float:left;"> <a style="color:blue;font-family:Tahoma;font-size:12px;" href=\"$self?$strGet\">[First]</a></div>';
		} else {
			$prev  = '<span class="disabled">Previous</span>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<span class="disabled">First</span>'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;<a href=\"$self?page=$page&$strGet\">Next</a>&nbsp;&nbsp;";
			$last = "<a href=\"$self?page=$totalPages&$strGet\">[Last]</a>";
		} else {
			$next = '&nbsp;&nbsp;<span class="disabled">Next</span>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<span class="disabled">Last</span>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = " <span class='selected'>$page</span>";   // no need to 
				}
				else
				{
					$pagingLink[] = " <span class='selected'>$page</span>";   // no need to 
				}
				//create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = "<a href=\"$self?$strGet\">$page</a>";
				} else {	
					if($page < 10)
					{
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\">$page</a>";
					}
					else
					{
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\">$page</a>";


					}
				}	
			}
	
		}
		
		//$pagingLink ="<b>Paging<b>&nbsp;&nbsp;". implode(' | ', $pagingLink);
		$pagingLink =implode('&nbsp;&nbsp;', $pagingLink);
		 
		// return the page navigation link
		$pagingLink =$prev.$pagingLink.$next;
	}
	
	return $pagingLink;
}



function getPagingLinkBackEnd($sqlrowscount, $itemPerPage = 10, $strGet = '',$newpagenumber ='')
{

	//$result        = mysql_query($sql);
	$pagingLink    = '';
	//$totalResults  = mysql_num_rows($result);
	$totalResults=$sqlrowscount;
	$totalPages    = ceil($totalResults / $itemPerPage);
	
	// how many link pages to show
	$numLinks      = 10;
	 if($newpagenumber=="")
	{
		if(isset($_GET['page']))
		{
			$newpagenumber=$_GET['page'];
		}
		else
		{
			$newpagenumber="";
		}
	}
		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 0) {
	
		$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		

		//if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		if ($newpagenumber > 0) {
			$pageNumber = $newpagenumber;//(int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = "<a  href=\"$self?page=$page&$strGet\">Previous</a>&nbsp;&nbsp;";
			} else {
				$prev = "<a href=\"$self?$strGet\" >Previous</a>&nbsp;&nbsp;";
			}	
				
			$first = "<a style='text-decoration:none;' href=\"$self?page=1&$strGet\" >First</a>";
		} else {
			$prev  = '<a style="text-decoration:none;"><span class="disabled" style="">Previous</span></a>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<a style="text-decoration:none;"><span class="disabled"  style="">First</span></a>'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;<a style='text-decoration:none;' href=\"$self?page=$page&$strGet\">Next</a>&nbsp;&nbsp;";
			$last = "<a style='text-decoration:none;' href=\"$self?page=$totalPages&$strGet\">Last</a>";
		} else {
			$next = '&nbsp;&nbsp;<a style="text-decoration:none;"><span class="disabled">Next</span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<a style="text-decoration:none;"><span class="disabled" >Last</span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = "<a href='#' class='selected'>$page</a>";   // no need to 
				}
				else
				{
					$pagingLink[] = "<a href='#' class='selected'>$page</a>";   // no need to 
				}
				//create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = "<a href=\"$self?$strGet\">$page</a>";
				} else {	
					if($page < 10)
					{
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\">$page</a>";
					}
					else
					{
						$pagingLink[] = "<a href=\"$self?page=$page&$strGet\">$page</a>";


					}
				}	
			}
	
		}
		
		//$pagingLink ="<b>Paging<b>&nbsp;&nbsp;". implode(' | ', $pagingLink);
		$pagingLink =implode('&nbsp;&nbsp;', $pagingLink);
		 
		// return the page navigation link
		$pagingLink =$first.$prev.$pagingLink.$next.$last;
	}
	
	return $pagingLink;
}

function getPagingLinkBackEndFrontEnd($sqlrowscount, $itemPerPage = 10, $strGet = '',$newpagenumber ='',$strHostName='')
{

	
	//$result        = mysql_query($sql);
	$pagingLink    = '';
	//$totalResults  = mysql_num_rows($result);
	$totalResults=$sqlrowscount;
	$totalPages    = ceil($totalResults / $itemPerPage);
	
	// how many link pages to show
	$numLinks      = 10;
	 if($newpagenumber=="")
	{
		if(isset($_GET['page']))
		{
			$newpagenumber=$_GET['page'];
		}
		else
		{
			$newpagenumber="";
		}
	}
		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 0) {
	
		//$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		$self = $strHostName;
		//$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;

		//if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		if ($newpagenumber > 0) {
			$pageNumber = $newpagenumber;//(int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = "<a  href=\"$self?page=$page&$strGet\" title='Next'><img src='images/prev_md_paging.png' style='margin-top:10px; border:solid 0px red;' alt='Next' /></a>&nbsp;&nbsp;";
			} else {
				$prev = "<a href=\"$self?$strGet\" ><img src='images/prev_md_paging.png' style='border:solid 0px yellow;' alt='Previous' /></a>&nbsp;&nbsp;";
			}	
				
			$first = "<a href=\"$self?page=1&$strGet\" style='display:none;'><img src='images/prev_md_paging.png' style='border:solid 0px blue;' alt='Previous'  /></a>";
		} else {
			$prev  = '<a style="display:none;"><span class="disabled" style="color:#f0eeec; font-size:12px;"><img src="images/next_md_paging.png"  style="border:solid 0px green;" alt="Next"  /></span></a>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<a><span class="disabled"  style="color:#f0eeec; font-size:12px;"><img src="images/prev_md_paging.png" style="border:solid 0px black;" alt="Previous"  /></span></a>&nbsp;&nbsp;'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"$self?page=$page&$strGet\" style=''><img src='images/next_md_paging.png' alt='Previous' style='border:solid 0px #CCFF66;' /></a>&nbsp;&nbsp;";
			$last = "<a href=\"$self?page=$totalPages&$strGet\" style='display:none;'><img src='images/next_md_paging.png' style='border:solid 0px #3333FF;' /></a>";
		} else {
			$next = '&nbsp;&nbsp;&nbsp;&nbsp;<a style="display:none;"><span class="disabled" style="color:#f0eeec; font-size:12px;"><img src="images/prev_md_paging.png" alt="Previous" style="border:solid 0px #FF00FF;"   /></span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<a><span class="disabled" style="color:#f0eeec; font-size:12px;"><img src="images/next_md_paging.png"  style="border:solid 0px #FF9933;"  alt="Next"/></span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = "&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' style='font-weight:bold;'>$page</a>&nbsp;&nbsp;";   // no need to 
				}
				else
				{
					$pagingLink[] = "&nbsp;&nbsp;<a href='#' style='color:#2a6496;'>$page</a>&nbsp;&nbsp;";   // no need to 
				}
				//create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = "&nbsp;&nbsp;<a href=\"$self?$strGet\">$page</a>&nbsp;&nbsp;";
				} else {	
					if($page < 10)
					{
						$pagingLink[] = "&nbsp;&nbsp;<a href=\"$self?page=$page&$strGet\">$page</a>&nbsp;&nbsp;";
					}
					else
					{
						$pagingLink[] = "&nbsp;&nbsp;<a href=\"$self?page=$page&$strGet\">$page</a>&nbsp;&nbsp;";


					}
				}	
			}
	
		}
		
		//$pagingLink ="<b>Paging<b>&nbsp;&nbsp;". implode(' | ', $pagingLink);
		$pagingLink =implode('&nbsp;&nbsp;', $pagingLink);
		 
		// return the page navigation link
		$pagingLink =$first.$prev.$pagingLink.$next.$last;
	}
	
	return $pagingLink;
}


function getPagingLinkBackEndFrontEnd_ajax($sqlrowscount, $itemPerPage = 10, $strGet = '',$newpagenumber ='',$strHostName='')
{

	
	//$result        = mysql_query($sql);
	$pagingLink    = '';
	//$totalResults  = mysql_num_rows($result);
	$totalResults=$sqlrowscount;
	$totalPages    = ceil($totalResults / $itemPerPage);
	$strNewHostName="";
	// how many link pages to show
	$numLinks      = 10;
	 if($newpagenumber=="")
	{
		if(isset($_GET['page']))
		{
			$newpagenumber=$_GET['page'];
		}
		else
		{
			$newpagenumber="";
		}
	}
		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 0) {
	
		//$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		$self = $strHostName;

		if($strHostName=="Doc_Consult")
		{
			$strNewHostName="dvDocConsult";
		} 
		else if($strHostName=="Medication")
		{
			$strNewHostName="dvMedication";
		}
		else if($strHostName=="Allergies")
		{
			$strNewHostName="dvAllergies";
		}
		else if($strHostName=="Hospitalization")
		{
			$strNewHostName="dvHospitalization";
		}
		else if($strHostName=="Immunization")
		{
			$strNewHostName="dvImmunization";
		}
		else if($strHostName=="Health_Problems")
		{
			$strNewHostName="dvHealth_Problems";
		}
		else if($strHostName=="Family_History")
		{
			$strNewHostName="dvFamily_History";
		}
		else if($strHostName=="Blood_Pressure")
		{
			$strNewHostName="dvBlood_Pressure";
		}
		else if($strHostName=="Sugar_Profile")
		{
			$strNewHostName="dvSugar_Profile";
		}
		else if($strHostName=="Life_Style")
		{
			$strNewHostName="dvLife_Style";
		}
		else if($strHostName=="Lipid_Profile")
		{
			$strNewHostName="dvLipid_Profile";
		}
		else if($strHostName=="MD_Comment_Ins")
		{
			$strNewHostName="dvMDComments";
		}
		else if($strHostName=="Doctor_Comment_Ins")
		{
			$strNewHostName="dvDocComments";
		}
		
		
		
		
		
		
		//$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;

		//if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		if ($newpagenumber > 0) {
			$pageNumber = $newpagenumber;//(int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = "<a  href='#' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."') title='Next'><img src='images/prev_md_paging.png' style='margin-top:10px; border:solid 0px #541cb1;' alt='Next' /></a>&nbsp;&nbsp;";
			} else {
				$prev = "<a  href='#' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."') ><img src='images/prev_md_paging.png' alt='Previous' /></a>&nbsp;&nbsp;";
			}	
				
			$first = "<a  href='#' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."')><img src='images/prev_md_paging.png' alt='Previous'  /></a>";
		} else {
			$prev  = '<a><span class="disabled" style="color:#f0eeec; font-size:12px;  border:solid 0px green;"><img src="images/prev_md_paging.png" alt="Next"  align="absmiddle" /></span></a>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<a><span class="disabled"  style="color:#f0eeec; font-size:12px;  border:solid 0px red;"><img src="images/prev_md_paging.png" alt="Previous"  /></span></a>&nbsp;&nbsp;'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;&nbsp;&nbsp;<a  href='#' style='border:solid 0px black;' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."')><img src='images/next_md_paging.png' alt='Previous'  /></a>&nbsp;&nbsp;";
			$last = "<a href=\"$self?page=$totalPages&$strGet\" style='border:solid 0px yellow;'><img src=images/next_md_paging.png /></a>";
		} else {
			$next = '&nbsp;&nbsp;&nbsp;&nbsp;<a><span class="disabled" style="color:#f0eeec; font-size:12px; border:solid 0px pink;"><img src="images/next_md_paging.png" alt="Previous"  /></span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<a><span class="disabled" style="color:#f0eeec; font-size:12px; border:solid 0px blue;"><img src="images/next_md_paging.png" alt="Next"/></span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = "&nbsp;&nbsp;&nbsp;&nbsp;<a href='#' style='font-weight:bold;'>$page</a>&nbsp;&nbsp;";   // no need to 
				}
				else
				{
					$pagingLink[] = "&nbsp;&nbsp;<a href='#' style='color:#2a6496;'>$page</a>&nbsp;&nbsp;";   // no need to 
				}
				//create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = "&nbsp;&nbsp;<a  href='#' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."')>$page</a>&nbsp;&nbsp;";
				} else {	
					if($page < 10)
					{
						$pagingLink[] = "&nbsp;&nbsp;<a  href='#' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."')>$page</a>&nbsp;&nbsp;";
					}
					else
					{
						$pagingLink[] = "&nbsp;&nbsp;<a  href='#' onclick=javascript:RetriveReocrds_Main('".$strHostName."','".$strNewHostName."','".$page."&".$strGet."')>$page</a>&nbsp;&nbsp;";
					}
				}	
			}
	
		}
		
		//$pagingLink ="<b>Paging<b>&nbsp;&nbsp;". implode(' | ', $pagingLink);
		$pagingLink =implode('&nbsp;&nbsp;', $pagingLink);
		 
		// return the page navigation link
		$pagingLink =$prev.$pagingLink.$next;
	}
	
	return $pagingLink;
}


function getPagingLinkCalorie($sqlrowscount, $itemPerPage = 10, $strGet = '',$newpagenumber ='',$strHostName='')
{

	//$result        = mysql_query($sql);
	$pagingLink    = '';
	//$totalResults  = mysql_num_rows($result);
	$totalResults=$sqlrowscount;
	$totalPages    = ceil($totalResults / $itemPerPage);
	
	// how many link pages to show
	$numLinks      = 10;
	 if($newpagenumber=="")
	{
		if(isset($_GET['page']))
		{
			$newpagenumber=$_GET['page'];
		}
		else
		{
			$newpagenumber="";
		}
	}
		
	// create the paging links only if we have more than one page of results
	if ($totalPages > 0) {
	
		//$self = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ;
		$self = $strHostName;
		

		//if (isset($_GET['page']) && (int)$_GET['page'] > 0) {
		if ($newpagenumber > 0) {
			$pageNumber = $newpagenumber;//(int)$_GET['page'];
		} else {
			$pageNumber = 1;
		}
		
		// print 'previous' link only if we're not
		// on page one
		if ($pageNumber > 1) {
			$page = $pageNumber - 1;
			if ($page > 1) {
				$prev = "<a  href=\"$self&page=$page&$strGet\">Previous</a>&nbsp;&nbsp;";
			} else {
				$prev = "<a href=\"$self&$strGet\" >Previous</a>&nbsp;&nbsp;";
			}	
				
			$first = "<a href=\"$self&page=1&$strGet\">First</a>";
		} else {
			$prev  = '<a><span class="disabled" style="color:#f0eeec; font-size:12px;">Previous</span></a>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<a><span class="disabled"  style="color:#f0eeec; font-size:12px;">First</span></a>&nbsp;&nbsp;'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;<a href=\"$self&page=$page&$strGet\">Next</a>&nbsp;&nbsp;";
			$last = "<a href=\"$self&page=$totalPages&$strGet\">Last</a>";
		} else {
			$next = '&nbsp;&nbsp;<a><span class="disabled" style="color:#f0eeec; font-size:12px;">Next</span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<a><span class="disabled" style="color:#f0eeec; font-size:12px;">Last</span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = "<a href='#' style='color:#fff; font-weight:bold; background-color:#f58026;'>$page</a>";   // no need to 
				}
				else
				{
					$pagingLink[] = "<a href='#' style='color:#2a6496;'>$page</a>";   // no need to 
				}
				//create a link to current page
			} else {
				if ($page == 1) {
					$pagingLink[] = "<a href=\"$self&$strGet\">$page</a>";
				} else {	
					if($page < 10)
					{
						$pagingLink[] = "<a href=\"$self&page=$page&$strGet\">$page</a>";
					}
					else
					{
						$pagingLink[] = "<a href=\"$self&page=$page&$strGet\">$page</a>";


					}
				}	
			}
	
		}
		
		//$pagingLink ="<b>Paging<b>&nbsp;&nbsp;". implode(' | ', $pagingLink);
		$pagingLink =implode('&nbsp;&nbsp;', $pagingLink);
		 
		// return the page navigation link
		$pagingLink =$first.$prev.$pagingLink.$next.$last;
	}
	
	return $pagingLink;
}

?>