<?php
	require_once "config/db.php" ;

	class Mcontent extends Db {
		function return_content($id = '/', $lang = 'arm') {
			if($id) {
			settype($id, 'string') ;
					}
			if($id=='/') $sql = "SELECT description,keywords,title,menu_name,content,created,lastmod,uri FROM pages WHERE lang ='{$lang}'and visible = '1' ORDER BY position ASC LIMIT 1" ;
			else if(substr($id,-4)=='news') $sql = "SELECT description,keywords,title,menu_name,content,created,lastmod FROM news WHERE uri='{$id}'  and lang ='{$lang}' LIMIT 1" ;
			else $sql = "SELECT description,keywords,title,menu_name,content,created,lastmod FROM pages WHERE uri='{$id}' and lang ='{$lang}' LIMIT 1" ;
			$result = $this->sql($sql);
			return $result ;
		}
	}


?>
