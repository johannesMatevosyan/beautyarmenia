<?php
	require_once "config.php" ;

	class Db extends SiteConfig {

		private $connection ;

		function __construct() {
			$this->open_connection() ;
//			echo "Connection is set" ;
		}

		private function open_connection() {
			$this->connection = mysql_connect($this->DB_HOST,$this->DB_USER,$this->DB_PASS) ;
			if(!$this->connection) {
				die("Database connection failed: ". mysql_error()) ;
			} else {
				$db_select = mysql_select_db($this->DB_NAME) ;
				if(!$db_select) {
					die("Database selection failed: ". mysql_error()) ;
				}
			}
			mysql_query("set names utf8") or die("set names utf8 failed") ;
		}

		public function sql($query) {
			$result = mysql_query($query) ;
			if(!$result) {
				die("Database query failed: ".mysql_error()) ;
			}
			return $result ;
		}
	}

	$db = new db() ;
?>
