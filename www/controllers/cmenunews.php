<?php
	require_once "models/mmenunews.php" ;

	class CmenuNews extends MmenuNews {
		
		function print_menu($lang) {		
			
			$res = $this->return_menu($lang) ; // kanchum e mmenui metod@ pakagcerum uxarkum enq lezun
			while ($row = mysql_fetch_object($res)) {
			//print_r($row);	
			$news[] = array("picuri"=>$row->picuri,"menu_name"=>$row->menu_name, "uri"=>$row->uri, "heading"=>$row->heading, "created"=>$row->created);
			}
			return $news ;
		}
	}
	$aux_vmenu = new CmenuNews() ;
	$vmenu_news = $aux_vmenu->print_menu($lang) ;

?>
