<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$dbhost = "127.0.0.1"; // Host name 
			$dbport = "3306"; // Host port
			$dbusername = "root"; // Mysql username 
			$dbpassword = "OpenShift.2596"; // Mysql password 
			$db_name = "dmolano"; // Database name 

			$mysqlCon = mysqli_connect($dbhost, $dbusername, $dbpassword, "", $dbport) or die("Error: " . mysqli_error($mysqlCon));
			mysqli_select_db($mysqlCon, $db_name) or die("Error: " . mysqli_error($mysqlCon));
		}		
	} 
?>