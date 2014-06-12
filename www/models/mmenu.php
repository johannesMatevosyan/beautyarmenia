<?php
	require_once "config/db.php" ;

	class Mmenu extends Db {
		function return_menu() {
			$sql = "SELECT uri, menu_name FROM pages WHERE visible = '1' AND lang ='{$lang}' ORDER BY position" ;
			//echo $sql;
			$res = $this->sql($sql);
			return $res ;
		}
	}
?>
