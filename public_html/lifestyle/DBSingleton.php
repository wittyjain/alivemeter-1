<?php

class DBConnection{
	public $database;
	private static $instance;

	private function __construct(){
		$DEBUG=0;
		try{
			if($DEBUG)
				echo "Inside try of constructior of DBConnection class";
			$databaseConfig = parse_ini_file('database_connection_details.ini');
			$this->database = mysql_connect($databaseConfig['hostname'], $databaseConfig['user'],$databaseConfig['password']);
			mysql_select_db("alivemet_db");
		}
		catch(Exception $ex){
			echo 'Error : '.$ex->getMessage();
		}
	}

	public static function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new DBConnection;
		}
		return self::$instance;
	}

	public static function close(){
		$database = null;
	}

	public static function getData($mysqlQuery){
		$conn = self::getInstance()->database;
		$result = mysql_query($mysqlQuery);
		if($result === FALSE) {
    			die(mysql_error()); // TODO: better error handling
		}
		else
			return $result;
	}
}
