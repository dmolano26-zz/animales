<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$db_host = getenv('OPENSHIFT_MYSQL_DB_HOST'); //sample host 
			$db_user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
			$db_pass = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
			$db_name = 'dmolano'; //this is the database I created in PhpMyAdmin
	
			$db = new mysqli($db_host, $db_user, $db_pass);

			if ($db->connect_errno) {

    				die('Connect Error (' . $db->connect_errno . ') '
        			. $db->connect_error);
			}
			mysqli_select_db($db,$db_name); 
		}		
	} 
?>