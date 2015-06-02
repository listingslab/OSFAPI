<?php
// Creates a connection to the DB using MySQLi
if ( ! function_exists( 'setup_database' ) ) :
	function setup_database (){
		global $api;
		require_once ('PHP-MySQLi/MysqliDb.php');
		$api ['db_database'] = "osfrontend";
		if ($_SERVER ['SERVER_NAME'] == 'osfrontend.com'){
			$api ['db_host'] = "50.56.52.139";
			$api ['db_user'] = "osfewebuser";
			$api ['db_pw'] = "c185vlk";	
		}else{
			$api ['db_host'] = "localhost";
			$api ['db_user'] = "root";
			$api ['db_pw'] = "root";
		}
		$api ['db'] = new MysqliDb (
			$api ['db_host'], 
			$api ['db_user'], 
			$api ['db_pw'], 
			$api ['db_database']
		);
		$api['output']['database'] = $api ['db_host'];
	}
endif;
?>