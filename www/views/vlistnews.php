<?php 
	$aux_list = new CcreateEditNews() ;
	$list = $aux_list->print_list() ;
	echo "<table>" ;
	foreach($list as $k => $val) 
	{
	echo'<tr><td>'.'<b>'.$k.'</b></td></tr><tr><td>&nbsp;</td></tr>';
	foreach($val as $id => $menu_name) :
?>
	<tr><td><a href = "?editnews=<?=$id;?>&lang=<?=$k;?>" >[Խմբագրել]</a></td><td><?=$menu_name;?></td><td><a href = "" onclick=" var x=confirm('Համոզված ե՞ք,որ անհրաժեշտ է հեռացնել');if(x){this.href ='?deletenews=<?=$id;?>'}">Հեռացնել</a></td></tr>

<?php endforeach ;echo'<tr><td>&nbsp;</td></tr>'; }?>

<table>