<?php
	//require_once "{$config->APP_PATH}/models/mcreateedit.php" ; // подключаем модель McreateEdit
	require_once '../config/config.php' ;
	require_once "{$config->APP_PATH}/config/db.php" ;
	$lang = $_POST['lang'];
	

function sql($query) {
			$result = mysql_query($query) ;
			if(!$result) {
				die("Database query failed: ".mysql_error()) ;
			}
			return $result ;
		}
function menu_pos($lang) {
			if($lang)
			$sql = "SELECT position,menu_name FROM pages WHERE lang ='{$lang}' ORDER BY position ASC" ;
			else
			$sql = "SELECT position,menu_name FROM pages ORDER BY position ASC" ;
			$res = sql($sql) ;
			return $res ;
		}
function menu_return($last_pos = null,$lang = null) {
			$res = menu_pos($lang) ;
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
			$menu = menu_return('Մենյուի վերջում', $lang);
			$max = count($menu) ;
			$counter = 0;
			//print_r ($menu);
		?>
	      <?php foreach($menu as $menu_name => $position) : ?>
	      <?php $counter++ ; if($counter != $max) : ?>
	      <option value = "<?=$position;?>">
	        <?=$position." : ".$menu_name." - ից առաջ";?>
          </option>
	      <?php else : ?>
	      <option value = "<?=$position;?>" selected>
	        <?=$position." - ".$menu_name;?>
          </option>
	      <?php endif ; ?>
	      <?php endforeach ; ?>
