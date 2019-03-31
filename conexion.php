<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$db_host = '127.0.0.1';
			$db_user = getenv('MYSQL_USER');
			$db_pass = getenv('MYSQL_PASSWORD');
			$db_name = 'dmolano'; //this is the database I created in PhpMyAdmin
	
			$db = new mysqli($db_host, $db_user, $db_pass);

			if ($db->connect_errno) {

    				die('Connect Error (' . $db->connect_errno . ') '
        			. $db->connect_error);
			}
			mysqli_select_db($db,$db_name); 
			return $db;
		}		
	} 
?>