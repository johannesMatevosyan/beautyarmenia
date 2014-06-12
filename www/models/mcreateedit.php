<?php
	require_once "{$config->APP_PATH}/config/db.php" ;
	

	class McreateEdit extends Db {
		function create($post) {
			$uri = '/'.$post['uri'];
			$sql = "INSERT INTO
				pages(description,keywords,title,menu_name,position,visible,lang,content,created,uri)
				VALUES('{$post['description']}','{$post['keywords']}','{$post['title']}',
				'{$post['menu_name']}',{$post['position']},'{$post['visible']}','{$post['lang']}','{$post['content']}',NOW(),'{$uri}')" ;
//			echo $sql ;
			$this->sql($sql);

			return true ;
		}
		
		function menu_pos($lang) {
			if($lang)
			$sql = "SELECT position,menu_name FROM pages WHERE lang ='{$lang}' ORDER BY position ASC" ;
			else
			$sql = "SELECT position,menu_name FROM pages ORDER BY position ASC" ;
			$res = $this->sql($sql) ;
			return $res ;
		}
		
		function pos_inc($pos) {
			$sql = "UPDATE pages SET position = position+1 WHERE position >= {$pos}" ;
			$this->sql($sql) ;
		}
		
		function list_pages() {
			$sql = 'SELECT id,menu_name,lang FROM pages ORDER BY position ASC' ;
			$res = $this->sql($sql) ;
			return $res ;
		}
		
		function retr_pageedit($id) {
			$sql = 'SELECT description,keywords,title,menu_name,position,content,visible,lang,uri FROM pages WHERE id = '.$id ;
			$result = $this->sql($sql) ;
			return $result ;
		}
		
		function update_page($post) {
		
		$text=$post['uri'];
		$v=$this->BASE_URL;
		$textdel='http://'.$v;
		$text=str_replace("$textdel","",$text);
		$post['uri']=$text;
		
			$aux_sql ;
			$count = count($post)-1 ;
			$counter = 0 ;
			foreach($post as $key => $val) {
				if($key != 'id') {
					$counter++ ;
					if($counter != $count) {
						$aux_sql .= $key.'=\''.$val.'\',' ;
					} else {
						$aux_sql .= $key.'=\''.$val.'\'' ;
					}
				}
			}
			$sql = 'UPDATE pages SET '.$aux_sql.',lastmod=NOW() WHERE id = '.$post['id']  ;
			$this->sql($sql) ;
		}
		
		function delete_page($id) {
			$sql = 'DELETE FROM pages WHERE id = '.$id ;
			$this->sql($sql) ;
//			echo $sql ;
		}
	}	
?>