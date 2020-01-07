<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="b9d075f51b9f19";$this->pass="3dec4c23";$this->host="eu-cdbr-west-02.cleardb.net";$this->ddbb="heroku_4b41cf52284f1e3";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>
