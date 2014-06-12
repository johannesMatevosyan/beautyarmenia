<?php
	require_once "models/mmenu.php" ;

	class Cmenu extends Mmenu {
		
		function print_menu($lang) {		
			
			$res = $this->return_menu($lang) ;// kanchum e mmenui metod@ pakagcerum uxarkum enq lezun
			while($row = mysql_fetch_array($res)) 
			{
			$mname[$row['uri']] = $row['menu_name'] ; // забиваем в массив результат выполнения заявки
			}
			return $mname ;
		}
	}
	$aux_vmenu = new Cmenu() ;
	$vmenu = $aux_vmenu->print_menu($lang) ;

?>
