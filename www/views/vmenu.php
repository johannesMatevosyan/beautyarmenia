<?php
	require_once "controllers/cmenu.php" ;
	echo "<ul>" ;
	foreach($vmenu as $uri => $link) {
	if($page['menu_name'] == $link) echo "<li class='current' > <a href = \"{$uri}\">{$link}</a></li>" ;
	else echo "<li> <a href = \"{$uri}\">{$link}</a></li>" ;
	}
	echo "</ul>" ;


?>