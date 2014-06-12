<?php
	require_once "{$config->APP_PATH}/models/mcreateedit.php" ; // подключаем модель McreateEdit

	class CcreateEdit extends McreateEdit {
		/*private function clean_data($str) { // ф-ция для очистки введенного контента
			if(get_magic_quotes_gpc() == 1) { // если на сервере включен magic quotes, срабатывает "ручная" очистка
				$str = str_replace('\"', "&quot;", $str) ;
				$str = str_replace("\'", "&#039;", $str) ;
				$str = str_replace("<", "&lt;", $str) ;
				$str = str_replace(">", "&gt;", $str) ;
			} else { // если на сервере выключен magic quotes, срабатывает "ручная" очистка
				$str = htmlspecialchars($str,ENT_QUOTES,"UTF-8",false) ;
			}
			return $str ;
		}*/
		
		function post_data($post) { // ф-ция окончательной отправки данных в БД
			//foreach($post as $key => $value) { // обрабатываем каждый элемент массива
			//	$aux_post[$key] = $this->clean_data($value) ;
			//}
			$aux_post=$post;
			$this->pos_inc($aux_post['position']) ;
			//$aux_post['content'] = str_replace("\n","<br />",$aux_post['content']) ;
			$this->create($aux_post) ; // откидываем обработанный массив в БД
		}
		
		function menu_return($last_pos = null,$lang = null) {
			$res = $this->menu_pos($lang) ;
			while ($row = mysql_fetch_assoc($res)) {
				$menu[$row['menu_name']] = $row['position'] ;
				$max_position=$row['position'];
				if($row['position'] > $max_position) {
				$max_position=$row['position'];
								}
			}
			if($last_pos) {
				//$count = count($menu) ;
				//$menu[$last_pos] = $count+1 ;
				$menu[$last_pos] = $max_position+1 ;
			}
			return $menu ;
		}
		
		function print_list() {
			$list = $this->list_pages() ;
			while($row = mysql_fetch_assoc($list)) 
			{    
				//$l[$row['lang']][$row['uri']]=($m[$row['id']] = $row['menu_name']) ;
				$lang[$row['lang']][$row['id']] = $row['menu_name'] ;
			}
			return $lang;
		}
		
		function print_pageedit($id) {
			$res = $this->retr_pageedit($id) ;
			$row = mysql_fetch_assoc($res) ;
			return $row ;
		}
		
		function update_data($post) {
			$aux_post=$post;
			$this->pos_inc($aux_post['position']) ;
			$this->update_page($post) ;
		}
		
		function del_page($id) {
			$this->delete_page($id) ;
		}
	}
	
	$vcreateedit = new CcreateEdit() ;
	$vcreateedit->menu_return	
?>