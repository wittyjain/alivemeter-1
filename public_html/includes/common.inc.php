<?php session_start(); ?>
<?php include("gzip_start.php"); ?>
<?php include("dbinfo.inc.php"); ?>
<?php
     $strHostName  = "http://".$_SERVER['SERVER_NAME']."/alivemeter/public_html";
	/*for jupiter asia use 
	
	 $strHostName = "http://".$_SERVER['SERVER_NAME']."/alivemeter";*/

                        
	$SiteTitle="Shoppingcart";
	$strPageTitle = "Alivemeter";
	$querystring = "?qs=".GetQueryString_enc($converter);
	$querystring_dec = "?qs=".GetQueryString_dec();
	date_default_timezone_set('Asia/Kolkata');
	$EmailIDFromName="Shoppingcart";
	$ToEmailID = "support@jupiterindia.com";
	$strSeparator = "###";
	$Default_Image_Name = "noimage.png";
	$RetriveMainableName="";

	/*$_SESSION['UserType'] = 'Main';
	$_SESSION['UserID'] = 18;
	$_SESSION['UserName'] = 'Ganeshk';
	$_SESSION['UserEmail'] = 'ganeshka@gmail.com';*/
	
	
	
?>

<?php
	function checkimageexits($file_name)
	{	
		if (file_exists ($file_name))
		{
			return true;
		}
		return false;
	}
	
	
	function Alert($message) {
		print "<script language='javascript'>";
		print " alert('".$message."');";
		print "</script>";
	}
	
	function AlertandRedirect($message, $url) {
		print "<script language='javascript'>";
		print " alert('".$message."');";
		print " redirectURL('$url'); ";
		print "</script>";
	}
	
	function Redirect($url) {
		print "<script language='javascript'>";
		print " redirectURL('$url'); ";
		print "</script>";
	}
	
	function Confirm($message) {
		print "<script language='javascript'>";
		print " ConfirmSubmit('".$message."');";
		print "</script>";
	}
	
	function LogoutFront()
	{
		if (isset($_SESSION['login_name'])) {
			unset($_SESSION['login_name']);
			//session_unregister('login_name');
		}
		
		if (isset($_SESSION['OrderID'])) {
			unset($_SESSION['OrderID']);
			//session_unregister('OrderID');
		}
	
		if (isset($_SESSION['login_id'])) {
			unset($_SESSION['login_id']);
			//session_unregister('login_id');
		}
		
		if (isset($_SESSION['login_type']))	{
			unset($_SESSION['login_type']);
			//session_unregister('login_type');
		}
		
		if (isset($_SESSION['login_password']))	{
			unset($_SESSION['login_password']);
			//session_unregister('login_password');
		}
		session_destroy();
		Redirect('index.php');
	}
	function Logout() {
		if (isset($_SESSION['login_name'])) {
			unset($_SESSION['login_name']);
			//session_unregister('login_name');
		}
		
		if (isset($_SESSION['OrderID'])) {
			unset($_SESSION['OrderID']);
			//session_unregister('OrderID');
		}
	
		if (isset($_SESSION['login_id'])) {
			unset($_SESSION['login_id']);
			//session_unregister('login_id');
		}
		
		if (isset($_SESSION['login_type']))	{
			unset($_SESSION['login_type']);
			//session_unregister('login_type');
		}
		
		if (isset($_SESSION['login_password']))	{
			unset($_SESSION['login_password']);
			//session_unregister('login_password');
		}
		session_destroy();
		Redirect('login.php');
	}
	
	function Customer_Logout() {
		if (isset($_SESSION['User_ID'])) {
			unset($_SESSION['User_ID']);
			//session_unregister('User_ID');
		}
		
		if (isset($_SESSION['User_Name'])) {
			unset($_SESSION['User_Name']);
			//session_unregister('User_Name');
		}

		if (isset($_SESSION['User_Type'])) {
			unset($_SESSION['User_Type']);
			//session_unregister('User_Type');
		}
		
		if (isset($_SESSION['fb_type'])) {
			unset($_SESSION['fb_type']);
			//session_unregister('fb_type');
		}
		session_destroy();

		Redirect('index.php');
	}
	
	function CheckLoginSession() {
		if(!isset($_SESSION['login_id']) || !isset($_SESSION['login_name']) || !isset($_SESSION['login_type'])) {
			Logout();
		}
	}
	
	function CheckAdminLoginSession() {
		if(isset($_SESSION['login_id'])) {
			$strValue = true;
		} else {
			$strValue = false;
		}
		return $strValue;
	}
	
	function format_to_currency($amount) {
		return number_format($amount, 2, '.', ',');
	}
	
	function GetSessionValue($type) {
		if($type == "Name") {
			$strValue = $_SESSION['login_name'];
		} else if($type == "ID") {
			$strValue = $_SESSION['login_id'];
		} else if($type == "Type") {
			$strValue = $_SESSION['login_type'];
		}

		return $strValue;
	}
	
	function CheckMemberSession() {
		if(isset($_SESSION['memberid'])) {
			$strValue = true;
		} else {
			$strValue = false;
		}
		return $strValue;
	}
	
	function selfURL() {
		$s = empty($_SERVER["HTTPS"]) ? ''
			: ($_SERVER["HTTPS"] == "on") ? "s"
			: "";
		$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? ""
			: (":".$_SERVER["SERVER_PORT"]);
		return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
	}
	
	function GetValue($Query, $colname) {
		$strValue = "";
		$query = $Query;
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					$strValue = $row[''.$colname.''];
				}
			}
		}
		return $strValue;
	}
	
	function GetQueryString_enc($converter) {
		$strValue = $converter->encode($_SERVER['QUERY_STRING']);
		return $strValue;
	}
	
	function GetQueryString_dec() {
		$strValue = $_SERVER['QUERY_STRING'];
		return $strValue;
	}
	
	function GetPageURL() {
		$host = "http://".$_SERVER['HTTP_HOST'];
		$url = $host.$_SERVER['REQUEST_URI'];
		return $url;
	}
	
	function GetPageName() {
		$pagename = str_replace("alivemeter/", "", $_SERVER['SCRIPT_NAME']);
		$pagename = str_replace("/", "", $pagename);
		return $pagename;
	}
	
	function GetOnlyPageName() {
		$pagename = str_replace("alivemeter", "", $_SERVER['SCRIPT_NAME']);
		$pagename = str_replace("manage", "", $pagename);
		$pagename = str_replace("includes", "", $pagename);
		$pagename = str_replace("/", "", $pagename);
		return $pagename;
	}
	
	function UploadAndResizeImage($inputName,$uploadpath,$w,$h,$MaxId) {
		$filename = stripslashes($_FILES[$inputName]['name']);
		$extension = getExtension($filename);
		$extension = strtolower($extension);
		if($extension=="jpg" || $extension=="jpeg" ) {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);
		} else if($extension=="png") {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefrompng($uploadedfile);
		} else {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromgif($uploadedfile);
		}
		list($width,$height)=getimagesize($uploadedfile);
		/*if($width > 800 && $height > 800)
		{
			$newwidth=$w;
			$newheight=$h;
		}
		else if($width > 800 || $height > 800) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=$h;//($height/$width)*$newwidth;
		}*/

		if($width > 400 || $height > 400) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=($height/$width)*$newwidth;
		}
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filenewname=$_FILES[$inputName]['name'];
		$filenewname=strtolower($filenewname);
		$filenewname=str_replace(" ","",$filenewname);
		$filename =$uploadpath."/".$MaxId."".$filenewname;
		$filename=$filename;
		$strFileName1=$MaxId.$_FILES[$inputName]['name'];
		$strFileName1=strtolower($strFileName1);
		$strFileName1=str_replace(" ","",$strFileName1);
		 
		imagejpeg($tmp,$filename,100);
		imagedestroy($src);
		imagedestroy($tmp);
		return $strFileName1;
	}
	

function UploadAndResizeOwnImage($inputName,$uploadpath,$w,$h,$MaxId) {
		$filename = stripslashes($_FILES[$inputName]['name']);
		$extension = getExtension($filename);
		$extension = strtolower($extension);
		if($extension=="jpg" || $extension=="jpeg" ) {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);
		} else if($extension=="png") {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefrompng($uploadedfile);
		} else {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromgif($uploadedfile);
		}
		list($width,$height)=getimagesize($uploadedfile);
		$newwidth=$w;
			$newheight=$h;
		/*if($width > 800 && $height > 800)
		{
			$newwidth=$w;
			$newheight=$h;
		}
		else if($width > 800 || $height > 800) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=$h;//($height/$width)*$newwidth;
		}

		if($width > 400 || $height > 400) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=($height/$width)*$newwidth;
		}*/
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filenewname=$_FILES[$inputName]['name'];
		$filenewname=strtolower($filenewname);
		$filenewname=str_replace(" ","",$filenewname);
		$filename =$uploadpath."/".$MaxId."".$filenewname;
		$filename=$filename;
		$strFileName1=$MaxId.$_FILES[$inputName]['name'];
		$strFileName1=strtolower($strFileName1);
		$strFileName1=str_replace(" ","",$strFileName1);
		 
		imagejpeg($tmp,$filename,100);
		imagedestroy($src);
		imagedestroy($tmp);
		return $strFileName1;
	}
	
	function UploadAndResizeBigImage($inputName,$uploadpath,$w,$h,$MaxId) {
		$filename = stripslashes($_FILES[$inputName]['name']);
		$extension = getExtension($filename);
		$extension = strtolower($extension);
		if($extension=="jpg" || $extension=="jpeg" ) {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);
		} else if($extension=="png") {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefrompng($uploadedfile);
		} else {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromgif($uploadedfile);
		}
		list($width,$height)=getimagesize($uploadedfile);
		/*if($width > 800 && $height > 800)
		{
			$newwidth=$w;
			$newheight=$h;
		}
		else if($width > 800 || $height > 800) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=$h;//($height/$width)*$newwidth;
		}*/

		if($width > 400 || $height > 400) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=$height;
		}
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filenewname=$_FILES[$inputName]['name'];
		$filenewname=strtolower($filenewname);
		$filenewname=str_replace(" ","",$filenewname);
		$filename =$uploadpath."/".$MaxId."".$filenewname;
		$filename=$filename;
		$strFileName1=$MaxId.$_FILES[$inputName]['name'];
		$strFileName1=strtolower($strFileName1);
		$strFileName1=str_replace(" ","",$strFileName1);
		imagejpeg($tmp,$filename,100);
		imagedestroy($src);
		imagedestroy($tmp);
		return $strFileName1;
	}
	function UploadAndResizeCatImage($inputName,$uploadpath,$w,$h,$MaxId) {
		$filename = stripslashes($_FILES[$inputName]['name']);
		$extension = getExtension($filename);
		$extension = strtolower($extension);
		if($extension=="jpg" || $extension=="jpeg" ) {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromjpeg($uploadedfile);
		} else if($extension=="png") {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefrompng($uploadedfile);
		} else {
			$uploadedfile = $_FILES[$inputName]['tmp_name'];
			$src = imagecreatefromgif($uploadedfile);
		}
		list($width,$height)=getimagesize($uploadedfile);
		if($width > 800 && $height > 800)
		{
			$newwidth=$w;
			$newheight=$h;
		}
		else if($width > 800 || $height > 800) 
		{
			$newwidth=$w;
			$newheight=($height/$width)*$newwidth;
		}
		else
		{
			$newwidth=$width;
			$newheight=$h;//($height/$width)*$newwidth;
		}

		$newwidth=$w;
		$newheight=$h;//($height/$width)*$newwidth;
		$tmp=imagecreatetruecolor($newwidth,$newheight);
		imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);
		$filename =$uploadpath."/".$MaxId."".$_FILES[$inputName]['name'];
		$filename=$filename;
		$strFileName1=$MaxId.$_FILES[$inputName]['name'];
		$strFileName1=$strFileName1;
		imagejpeg($tmp,$filename,100);
		imagedestroy($src);
		imagedestroy($tmp);
		return $filename;
	}
	
	function getExtension($str) {
		$i = strrpos($str,".");
		if (!$i) { return ""; }
		$l = strlen($str) - $i;
		$ext = substr($str,$i+1,$l);
		return $ext;
 	}
	
	function uploadFileWidthoutResize($inputName, $uploadDir, $maxid) {
		$image = $_FILES[$inputName];
		$filename = stripslashes($_FILES[$inputName]['name']);
		$imagePath = '';
		// if a file is given
		if (trim($image['tmp_name']) != '') {
			$ext = substr(strrchr($image['name'], "."), 1); //$extensions[$image['type']];
			// generate a random new file name to avoid name conflict
			//$imagePath = md5(rand() * time()) . ".$ext";
			$imagePath = $maxid.$filename ;
			// make sure the image width does not exceed the
			// maximum allowed width
			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
			//$imagePath = $result;
		}
		return array('image' => $imagePath);
	}
	
	function uploadProductImage($inputName, $uploadDir) {
		$image = $_FILES[$inputName];
		$imagePath = '';
		// if a file is given
		if (trim($image['tmp_name']) != '') {
			$ext = substr(strrchr($image['name'], "."), 1); //$extensions[$image['type']];
			// generate a random new file name to avoid name conflict
			$imagePath = md5(rand() * time()) . ".$ext";
			// make sure the image width does not exceed the
			// maximum allowed width
			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
			//$imagePath = $result;
		}
		return array('image' => $imagePath);
	}
	
	function uploadFile($inputName, $uploadDir, $random) {
		move_uploaded_file($_FILES[$inputName]['tmp_name'], $uploadDir.$random."".$_FILES[$inputName]['name']);
	}
	function upload_resize_final($inputName,$uploadpath,$w,$h,$MaxId)
	{
		
		$filenewname="";
		$DESIRED_IMAGE_WIDTH=$w;
		$DESIRED_IMAGE_HEIGHT=$h;
		$filename = stripslashes($_FILES[$inputName]['name']);
		$filenewname=$filename;
		$filenewname=strtolower($filenewname);
		$filenewname=str_replace(" ","",$filenewname);
		$filename =$uploadpath.$MaxId."".$filenewname;
		$source_path =$_FILES[$inputName]['tmp_name'];
		list($source_width, $source_height, $source_type) = getimagesize($source_path);
		switch ($source_type) {
			case IMAGETYPE_GIF:
				$source_gdim = imagecreatefromgif($source_path);
				break;
			case IMAGETYPE_JPEG:
				$source_gdim = imagecreatefromjpeg($source_path);
				break;
			case IMAGETYPE_PNG:
				$source_gdim = imagecreatefrompng($source_path);
				break;
		}

		$source_aspect_ratio = $source_width / $source_height;
		$desired_aspect_ratio = $DESIRED_IMAGE_WIDTH / $DESIRED_IMAGE_HEIGHT;

		if ($source_aspect_ratio > $desired_aspect_ratio) {
		   
			$temp_height = $DESIRED_IMAGE_HEIGHT;
			$temp_width = ( int ) ($DESIRED_IMAGE_HEIGHT * $source_aspect_ratio);
		} else {
		   
			$temp_width = $DESIRED_IMAGE_WIDTH;
			$temp_height = ( int ) ($DESIRED_IMAGE_WIDTH / $source_aspect_ratio);
		}
		$temp_gdim = imagecreatetruecolor($temp_width, $temp_height);
		imagecopyresampled(
			$temp_gdim,
			$source_gdim,
			0, 0,
			0, 0,
			$temp_width, $temp_height,
			$source_width, $source_height
		);

		$x0 = ($temp_width - $DESIRED_IMAGE_WIDTH) / 2;
		$y0 = ($temp_height - $DESIRED_IMAGE_HEIGHT) / 2;

		$desired_gdim = imagecreatetruecolor($DESIRED_IMAGE_WIDTH, $DESIRED_IMAGE_HEIGHT);
		 
		imagecopy(  $desired_gdim,    $temp_gdim,    0, 0,   $x0, $y0,    $DESIRED_IMAGE_WIDTH, $DESIRED_IMAGE_HEIGHT);
		imagejpeg($desired_gdim,$filename);
		$filename=str_replace($uploadpath,"",$filename);		 
		return $filename;
			 
	}

	function SendEmail($fromName, $fromEmail, $toEmail, $strSubject, $strBody) {
		$from = $fromName." ".$fromEmail;
		$to = $toEmail;
		$subject = $strSubject;
		$string ="";
		
		
		
		

		/*$string="<table width='752px' border='0' cellspacing='0' cellpadding='0' style='border:solid 0px #e2e2e2; font-family:Verdana, Arial, Helvetica, sans-serif;'>";
		
		$string=$string."<tr>";
		$string=$string."<td>";
		$string=$string."<table width='752px' border='0' cellspacing='0' cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;'>";
		$string=$string."<tr>";
		$string=$string."<td><img src='http://www.shopping_cart.com/images/newslettertop.jpg' alt='shopping_cart' title='shopping_cart' border='0' /></td>";
		$string=$string."</tr>";
		$string=$string."</table>";
		$string=$string."</td>";
		$string=$string."</tr>";
		
		$string=$string."<tr>";
		$string=$string."<td>";
		

		$string=$string.$strBody;

		$string=$string."</td>";
		$string=$string."</tr>";
		
		
		$string=$string."<tr>";
		$string=$string."<td>";
		$string=$string."<table width='752px' border='0' cellspacing='0' cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;'>";
		$string=$string."<tr>";
		$string=$string."<td style='padding:20px 15px 5px 15px; color:#7c7c7c; font-size:13px; line-height:23px; background:#e2e2e2; text-align:center;'>Don&rsquo;t want to receive emails from us anymore? <span style='color:#0f59bd;'>Unsubscribe</span> :(<br />&copy; 2013 shopping_cart  All Rights Reserved.  Privacy Policy &ndash; Terms of Use</td>";
		$string=$string."</tr>";
		$string=$string."</table>";
		$string=$string."</td>";
		$string=$string."</tr>";
		
		
		$string=$string."</table>";*/
		
		$string=$string.$strBody;

		// First we have to build our email headers
		// Set out "from" address
		$headers = "From: $from\r\n"; 
		// Now we specify our MIME version
		$headers .= "MIME-Version: 1.0\r\n"; 
		// Create a boundary so we know where to look for
		// the start of the data
		$boundary = uniqid("HTMLEMAIL"); 
		// First we be nice and send a non-html version of our email
		$headers .= "Content-Type: multipart/alternative;".
				"boundary = $boundary\r\n\r\n"; 
		$headers .= "This is a MIME encoded message.\r\n\r\n"; 
		$headers .= "--$boundary\r\n".
				"Content-Type: text/plain; charset=ISO-8859-1\r\n".
				"Content-Transfer-Encoding: base64\r\n\r\n"; 
		   
		$headers .= chunk_split(base64_encode(strip_tags($string))); 
		// Now we attach the HTML version
		$headers .= "--$boundary\r\n".
				"Content-Type: text/html; charset=ISO-8859-1\r\n".
				"Content-Transfer-Encoding: base64\r\n\r\n"; 
		$headers .= chunk_split(base64_encode($string)); 


		// And then send the email ....
		//mail($to,$subject,"",$headers);
		/*$pageurl = $strHostName."/index.php";*/
		mail($to, $subject, "", $headers);
	}

	if($common->GetUserID() == "") {
		$common->SetGuestID();
	}
        
        function myTruncate($string, $limit = 1, $break = ".", $pad = "...") {
            // return with no change if string is shorter than $limit
            if (strlen($string) <= $limit)
                return $string;

            // is $break present between $limit and the end of the string?
            if (false !== ($breakpoint = strpos($string, $break, $limit))) {
                if ($breakpoint < strlen($string) - 1) {
                    $string = substr($string, 0, $breakpoint) . $pad;
                }
            }

            return $string;
        }
		
        function GetPaymentModeValues($modeid)
		{
			$strValue="";
			if($modeid=="1")
			{
				$strValue="Cash";
			}
			else if($modeid=="2")
			{
				$strValue="Master Card";
			}
			else if($modeid=="3")
			{
				$strValue="Visa Card";
			}
			else if($modeid=="4")
			{
				$strValue="Debit Cards";
			}
			else if($modeid=="5")
			{
				$strValue="Money Orders";
			}
			else if($modeid=="6")
			{
				$strValue="Cheques";
			}
			else if($modeid=="7")
			{
				$strValue="Credit Card";
			}
			else if($modeid=="8")
			{
				$strValue="Travelers Cheque";
			}
			else if($modeid=="9")
			{
				$strValue="Financing Available";
			}
			else if($modeid=="10")
			{
				$strValue="American Express";
			}
			else if($modeid=="11")
			{
				$strValue="Diners Club Card";
			}
			return $strValue;
		}
        function truncate($text, $length = 100, $ending = '...', $exact = false, $considerHtml = true) {
            if ($considerHtml) {
                // if the plain text is shorter than the maximum length, return the whole text
                if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
                    return $text;
                }
                // splits all html-tags to scanable lines
                preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);
                $total_length = strlen($ending);
                $open_tags = array();
                $truncate = '';
                foreach ($lines as $line_matchings) {
                    // if there is any html-tag in this line, handle it and add it (uncounted) to the output
                    if (!empty($line_matchings[1])) {
                        // if it's an "empty element" with or without xhtml-conform closing slash
                        if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
                            // do nothing
                            // if tag is a closing tag
                        } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
                            // delete tag from $open_tags list
                            $pos = array_search($tag_matchings[1], $open_tags);
                            if ($pos !== false) {
                                unset($open_tags[$pos]);
                            }
                            // if tag is an opening tag
                        } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
                            // add tag to the beginning of $open_tags list
                            array_unshift($open_tags, strtolower($tag_matchings[1]));
                        }
                        // add html-tag to $truncate'd text
                        $truncate .= $line_matchings[1];
                    }
                    // calculate the length of the plain text part of the line; handle entities as one character
                    $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
                    if ($total_length + $content_length > $length) {
                        // the number of characters which are left
                        $left = $length - $total_length;
                        $entities_length = 0;
                        // search for html entities
                        if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
                            // calculate the real length of all entities in the legal range
                            foreach ($entities[0] as $entity) {
                                if ($entity[1] + 1 - $entities_length <= $left) {
                                    $left--;
                                    $entities_length += strlen($entity[0]);
                                } else {
                                    // no more characters left
                                    break;
                                }
                            }
                        }
                        $truncate .= substr($line_matchings[2], 0, $left + $entities_length);
                        // maximum lenght is reached, so get off the loop
                        break;
                    } else {
                        $truncate .= $line_matchings[2];
                        $total_length += $content_length;
                    }
                    // if the maximum length is reached, get off the loop
                    if ($total_length >= $length) {
                        break;
                    }
                }
            } else {
                if (strlen($text) <= $length) {
                    return $text;
                } else {
                    $truncate = substr($text, 0, $length - strlen($ending));
                }
            }
            // if the words shouldn't be cut in the middle...
            if (!$exact) {
                // ...search the last occurance of a space...
                $spacepos = strrpos($truncate, ' ');
                if (isset($spacepos)) {
                    // ...and cut the text in this position
                    $truncate = substr($truncate, 0, $spacepos);
                }
            }
            // add the defined ending to the text
            $truncate .= $ending;
            if ($considerHtml) {
                // close all unclosed html-tags
                foreach ($open_tags as $tag) {
                    $truncate .= '</' . $tag . '>';
                }
            }
            return $truncate;
        }

?>
