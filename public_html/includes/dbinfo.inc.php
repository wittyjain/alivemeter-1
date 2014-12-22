<?php
	
	include('db.class.php');
	include('common.class.php');
	include("encryption.inc.php");
	include("functions.class.php");
	include("calorie_calc.class.php");
	include("paging.inc.php");
	include("get_retrive_records.class.php");	
	
	// database constraints defined local
	define('strLocalhost', 'localhost');
	define('strUsername', 'root');
	define('strPassword', 'root');
	define('strDatabaseName', 'alive_db');
	
	
	// class instance created
	$db = new db_class;
	$common = new common_class;
	$converter = new Encryption;
	$function = new function_class;
	$get_calorie = new calorie_calc;
	$get_retrive = new get_retrive_class;
	
		

	$foo = new Foo();
	

	// checking connectivity of database
	//if (!$db->connect(strLocalhost, strUsername, strPassword, strDatabaseName, true)) 
   	//$db->print_last_error(false);
	if (!$db->connect(strLocalhost, strUsername, strPassword, strDatabaseName, true))
	{
		$foo->go(mysql_error());
	}
	
?>
