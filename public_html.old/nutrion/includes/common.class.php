<?php

	// table constraints defined

	define('AdminLogin', 'tbl_adminlogin');
	define('Config_Settings', 'tbl_client_configurations');
	define('Categories', 'tbl_categories');
	define('Raw', 'tbl_raw');
	define('User', 'tbl_users');
	define('Recipe', 'tbl_recipe');
	define('Recipe_Det', 'tbl_recipe_det');
	
	
 
	class common_class {

		var $db;
		
		function common_class() {
			// class constructor.  Initializations here.
			$this->db = new db_class;
	   	}
	   
	   	function CheckConfigurationSettings() {
		  	$rows = $this->db->select("SELECT * FROM ".Config_Settings."");
			if ($this->db->row_count > 0) 
				return true;
			else
				return false;
	   	}
		
		function GetAdminTitle() {
		  	$rows = $this->db->select("SELECT * FROM ".Config_Settings."");
			if ($this->db->row_count > 0) 
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return $r['admintitle'];
				}
			else
				return "Set Admin Title";
	   	}
		
		function GetValue($query, $colname) {
		  	$rows = $this->db->select($query);
			if ($this->db->row_count > 0) {
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return $r[''.$colname.''];
				}
			}
	   	}
		
		function GetDiamondQuality($id) {
		  	$rows = $this->db->select("SELECT * FROM ".DiamondQualities." WHERE diamondqualityid = ".$id);
			if ($this->db->row_count > 0) 
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return $r['diamondquality'];
				}
			else
				return "";
	   	}
		
		function GetCatName($id) {
		  	$rows = $this->db->select("SELECT * FROM ".Categories." WHERE id = ".$id);
			if ($this->db->row_count > 0) 
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return str_replace("''", "'", $r['name']);
				}
			else
				return "";
	   	}
		
		function GetProductName($id) {
		  	$rows = $this->db->select("SELECT * FROM ".Products." WHERE id = ".$id);
			if ($this->db->row_count > 0) 
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return str_replace("''", "'", $r['title']);
				}
			else
				return "";
	   	}
		
		function GetBannertName($id) {
		  	$rows = $this->db->select("SELECT * FROM ".Banners." WHERE id = ".$id);
			if ($this->db->row_count > 0) 
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return str_replace("''", "'", $r['title']);
				}
			else
				return "";
	   	}
		
		function CheckProduct($userid, $productid, $usertype) {
			$query = "SELECT * FROM ".OrderDetails." WHERE userid = ".$userid." and productid = ".$productid." and usertype = '".$usertype."' and type <> 'Confirmed' ";
			$rows = $this->db->select($query);
			if ($this->db->row_count > 0) 
				return true;
			else
				return false;
		}
		
		function ShowItems() {
			$query = "SELECT count(*) as itemcount FROM ".OrderDetails." WHERE userid = ".$this->GetUserID()." and (type = '' or type = 'In Process' or type is null) and usertype = '".$this->GetUserType()."'";
			$rows = $this->db->select($query);
			if ($this->db->row_count > 0) {
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return str_replace("''", "'", $r['itemcount']);
				}
			} else {
				return 0;
			}
				
		}
		function ShowItemAmount() {
			$query = "SELECT sum(amount*qty) as totalamount FROM ".OrderDetails." WHERE orderid=0 and userid = ".$this->GetUserID()." and (type = '' or type = 'In Process') and usertype = '".$this->GetUserType()."'";
			$rows = $this->db->select($query);
			if ($this->db->row_count > 0) {
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   return str_replace("''", "'", $r['totalamount']);
				}
			} else {
				return 0;
			}
				
		}
		function GetUserID() {
			$strValue = "";
			if(isset($_SESSION['UserID'])) {
				$strValue = $_SESSION['UserID'];
			} else if(isset($_SESSION['GuestID'])) {
				$strValue = $_SESSION['GuestID'];
			}
			return $strValue;
		}
		
		function SetGuestID() {
			$_SESSION['GuestID'] = rand(0, 9999).date("d", time()).date("m", time()).date("y", time());
			$_SESSION['UserType'] = "Guest";
		}
		
		function GetUserType() {
			return $_SESSION['UserType'];
		}
		
		function GetUserName() {
			if(isset($_SESSION['UserName']))
			{
				return $_SESSION['UserName'];
			}
		}
		
		function GetOrderID() {
			if(isset($_SESSION['OrderID']))
			{
				return $_SESSION['OrderID'];
			}
		}
		
		function GetGuestID() {
			return $_SESSION['GuestID'];
		}
		
		function GetCategoryName($id) {
		  	$rows = $this->db->select("SELECT * FROM ".Categories." WHERE id = ".$id);
			if ($this->db->row_count > 0) 
				while ($r=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
				   $id = $r['id'];
				   $name = $r['name'];
				   $catid = $r['catid'];
				   if($catid == 0) {
				   		return $name;	
				   } else {
				   		$rows_ = $this->db->select("SELECT * FROM ".Categories." WHERE id = ".$catid);
						if ($this->db->row_count > 0) {
							while ($r_=$this->db->get_row($rows_, 'MYSQL_ASSOC')) {
								return $r_['name']." &raquo; ".$name;
							}
						}
				   }
				}
			else
				return "";
	   	}
		
		function CheckDuplocationRandomNo($couponcode)
		{
			$query = "SELECT * FROM ".Coupon." WHERE couponcode='$couponcode' ";
			$rows = $this->db->select($query);
			if ($this->db->row_count > 0) {
				$random = rand(0, 999);
				$couponcode='NYA'.$random;
				$this->CheckDuplocationRandomNo($couponcode);
				return;
			}

			return $couponcode;

		}
		function Multile_Level_Chosen_Category($Query_String_Id,$Chosen)
		{
			$query = "SELECT * FROM ".Categories." WHERE isdeleted = 0  and catid=0 order by id ";
			$rows = $this->db->select($query);
			//$array="[]";
			$array="";
			$selected="";
			$strValue="<select id='ddlCategories' name='ddlCategories$array'  style='width:370px;'".$Chosen." >";
			$strValue=$strValue."<option value='0' $selected >Parent Category</option>";
			if ($this->db->row_count > 0) {
				while ($row=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
					extract($row);
					$selected="";
					$MainCatId=$id;//GetValue("select catid as col from tbl_listing_category where listing_id=".$Query_String_Id." and catid=".$id,"col");
					if($MainCatId==$Query_String_Id){$selected='selected';}
					$strValue=$strValue."<option value='$id' $selected >$name</option>";
					$minus="&nbsp;-&nbsp;";
					$strSubValue="";
					//$strSubValue=$this->Multile_Level_SubCategory_Chosen_Function($id,$minus,$Query_String_Id);
					$strValue=$strValue.$strSubValue;
					
				}
			}
			$strValue=$strValue."</select>";
			return $strValue;
		}
		function RetriveIngredians($Query_String_Id)
		{
			$strValue="";$strSubValue="";
			$query = "SELECT * FROM ".Raw." WHERE isdeleted = 0  and id=$Query_String_Id order by ingredientname";
			//echo $query ;
			$rows = $this->db->select($query);
			if ($this->db->row_count > 0) {
				while ($row=$this->db->get_row($rows, 'MYSQL_ASSOC')) {
					extract($row);
					 
					$strSubValue="$ingredientname";
					$strValue=$strSubValue;
					
				}
			}
			
			return $strValue;
		}

	}


?>