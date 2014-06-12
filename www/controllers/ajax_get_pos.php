<?php
	require_once "models/mcreateedit.php" ; // подключаем модель McreateEdit
	$lang = $_POST['lang'];
	echo $lang;
?>	

	     <?php
			$menu = $vcreateedit->menu_return('Մենյուի վերջում',$lang='arm');
			$max = count($menu) ;
			$counter = 0;
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
