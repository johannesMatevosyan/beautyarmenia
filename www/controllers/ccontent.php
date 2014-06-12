<?php
	require_once "models/mcontent.php" ;
	class Ccontent extends Mcontent {
		function print_content($id = NULL, $lang) { 
			settype($id, "string") ;
			$res = $this->return_content($id,$lang) ;
			$page = mysql_fetch_assoc($res); // массив
//			$val = $row['content'] ;
//			$this->k_debug($row) ;
		return $page ;
		}
	}
	//$id = $_GET['id'] ;-aranc 4PU
	$friendly_uri = $uri_value;
	$vcontent = new Ccontent() ;
	$page = $vcontent->print_content($friendly_uri, $lang) ; // массив содержания страницы с текущим id

?>
