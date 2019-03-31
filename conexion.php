<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$db_host = '127.0.0.1';
			$db_user = getenv('MYSQL_USER');
			$db_pass = getenv('MYSQL_PASSWORD');
			$db_name = 'dmolano'; //this is the database I created in PhpMyAdmin
			$port = '3306';
	
			$db = new mysqli_connect($db_host, $db_user, $db_pass, $db_name, $port);

			if ($db->connect_errno) {

    				die('Connect Error (' . $db->connect_errno . ') '
        			. $db->connect_error);
			}
			return $db;
		}		
	} 
?>