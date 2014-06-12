<?php
	require_once "{$config->APP_PATH}/config/db.php" ;
	

	class McreateEditNews extends Db {
		function create($post) {
			$uri = '/'.$post['uri'].'-news';
			if($post['picuri']) $picuri = '/'.$post['picuri'];
			$sql = "insert into
				news(description,keywords,title,menu_name,heading,position,visible,lang,content,created,uri,picuri)
				VALUES('{$post['description']}','{$post['keywords']}','{$post['title']}','{$post['menu_name']}','{$post['heading']}',
				{$post['position']},'{$post['visible']}','{$post['lang']}','{$post['content']}',NOW(),'{$uri}','{$picuri}')" ;
//			echo $sql ;
			$this->sql($sql);

			return true ;
		}
		
		function menu_pos($lang) {
			if($lang)
			$sql = "SELECT position,menu_name FROM news WHERE lang ='{$lang}' ORDER BY position ASC" ;
			else
			$sql = "SELECT position,menu_name FROM news ORDER BY position ASC" ;
			$res = $this->sql($sql) ;
			return $res ;
		}
		
		function pos_inc($pos) {
			$sql = "UPDATE news SET position = position+1 WHERE position >= {$pos}" ;
			$this->sql($sql) ;
		}
		
		function list_pages() {
			$sql = 'SELECT id,menu_name,lang FROM news ORDER BY position ASC' ;
			$res = $this->sql($sql) ;
			return $res ;
		}
		
		function retr_pageedit($id) {
			$sql = 'SELECT description,keywords,title,menu_name,heading,position,content,visible,lang,uri,picuri FROM news WHERE id = '.$id ;
			$result = $this->sql($sql) ;
			return $result ;
		}
		
		function update_page($post) {
		
		$texturi=$post['uri'];
		$textpicuri=$post['picuri'];
		$v=$this->BASE_URL;
		$textdel='http://'.$v;
		$texturi=str_replace("$textdel","",$texturi);
		$post['uri']=$texturi;
		$textpicuri=str_replace("$textdel","",$textpicuri);
		$post['picuri']=$textpicuri;
		
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
			$sql = 'UPDATE news SET '.$aux_sql.',lastmod=NOW() WHERE id = '.$post['id']  ;
			$this->sql($sql) ;
		}
		
		function delete_page($id) {
			$sql = 'DELETE FROM news WHERE id = '.$id ;
			$this->sql($sql) ;
//			echo $sql ;
		}
	}	
?>