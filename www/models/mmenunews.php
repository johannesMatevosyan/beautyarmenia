<?php
	require_once "config/db.php" ;

	class MmenuNews extends Db {
		function return_menu($lang) {
		
			$sql = "SELECT uri,picuri,heading,menu_name,created FROM news WHERE visible = '1' AND lang ='{$lang}' ORDER BY position" ;
			$res = $this->sql($sql) ;
			return $res ;
		}
	}
?>
