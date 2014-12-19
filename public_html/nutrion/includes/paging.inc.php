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
				
			$first = '<span style="padding-right:7px;float:left;"> <a style="color:#2a6496;font-family:Tahoma;font-size:12px;" href=\"$self?$strGet\">[First]</a></div>';
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
				
			$first = '<span style="padding-right:7px;float:left;"> <a style="color:#2a6496;font-family:Tahoma;font-size:12px;" href=\"$self?$strGet\">[First]</a></div>';
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
				
			$first = "<a href=\"$self?page=1&$strGet\">First</a>";
		} else {
			$prev  = '<a><span class="disabled" style="color:grey">Previous</span></a>&nbsp;&nbsp;'; // we're on page one, don't show 'previous' link
			$first = '<a><span class="disabled"  style="color:grey">First</span></a>'; // nor 'first page' link
		}
	
		// print 'next' link only if we're not
		// on the last page
		if ($pageNumber < $totalPages) {
			$page = $pageNumber + 1;
			$next = "&nbsp;&nbsp;<a href=\"$self?page=$page&$strGet\">Next</a>&nbsp;&nbsp;";
			$last = "<a href=\"$self?page=$totalPages&$strGet\">Last</a>";
		} else {
			$next = '&nbsp;&nbsp;<a><span class="disabled" style="color:grey">Next</span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // we're on the last page, don't show 'next' link
			$last = '<a><span class="disabled" style="color:grey">Last</span></a>&nbsp;&nbsp;&nbsp;&nbsp;'; // nor 'last page' link
		}
		$start = $pageNumber - ($pageNumber % $numLinks) + 1;
		$end   = $start + $numLinks - 1;		
		
		$end   = min($totalPages, $end);
		
		$pagingLink = array();
		for($page = $start; $page <= $end; $page++)	{
			if ($page == $pageNumber) {
				if($page < 10)
				{
					$pagingLink[] = "<a href='#' style='color:#2a6496; background-color:#eeeeee; font-weight:bold;'>$page</a>";   // no need to 
				}
				else
				{
					$pagingLink[] = "<a href='#' style='color:#2a6496;'>$page</a>";   // no need to 
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

?>