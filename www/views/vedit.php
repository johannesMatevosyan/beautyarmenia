<?php
	$editpage = new CcreateEdit() ;
	$id = $_GET['edit'] ;
	$lang = $_GET['lang'] ;
	$cont = $editpage->print_pageedit($id) ;
/*	echo "<pre>" ;
	print_r($cont) ;
	echo "</pre>" ;
*/
?>
<form method="post">
  <input type = "hidden" name = "id" value = "<?=$id;?>"><br />
  <table width="588" height="225" cellspacing="10">
    <tr>
      <td width="344">Նկարագրություն:</td>
      <td width="132"><input type="text" name = "description" value = "<?=$cont['description'];?>" /></td>
    </tr>
    <tr>
      <td>Փնտրող համակարգի համար բառեր: </td>
      <td><input type="text" name = "keywords" value = "<?=$cont['keywords'];?>" /></td>
    </tr>
    <tr>
      <td>Էջի անունը:</td>
      <td><input type="text" name = "title" value = "<?=$cont['title'];?>" /></td>
    </tr>
    <tr>
      <td>Մենյուի անունը:</td>
      <td><input type="text" name = "menu_name" value = "<?=$cont['menu_name'];?>" /></td>
    </tr>
	<td>URL&nbsp;:</td>
      <td><input type="text" name = "uri" value = "<?='http://'.$config->BASE_URL.$cont['uri'];?>" /></td>
    </tr>
    <tr>
      <td>Մենյուի դիրքը:</td>
      <td><select name = "position">
        <?php
			$menu = $vcreateedit->menu_return('Մենյուի վերջում',$lang) ;
			$max = count($menu) ;
			$counter = 0;
		?>
        <?php foreach($menu as $menu_name => $position) : ?>
        <?php $counter++ ; ?>
        <option value = "<?=$position;?>" <?php if($menu_name == $cont['menu_name'])
																			{echo 'selected>'.$position.' : '.$menu_name.'</option>';}
													else if($counter == $max)
																			{echo '>'.$position.' : '.$menu_name.'</option>';}
													else
																			{echo '>'."$position"." : "."$menu_name"." - ից առաջ".'</option>';}?>
		<?php endforeach ; ?>
		></option>
      </select></td>
    </tr>
    <tr>
      <td>Էջերի երեվալը:</td>
      <td><select name = "visible">
        <option value = "1" <?php if($cont['visible'] == 1) {echo "selected";} ?>>Երևացող</option>
        <option value = "0" <?php if($cont['visible'] == 0) {echo "selected";} ?>>Թաքնված</option>
      </select></td>
    </tr>
	<tr>
	    <td height="21" >Էջի լեզուն:</td>
	    <td ><select name = "lang" >
	      <option value = "arm" <?php if($cont['lang'] == 'arm') {echo "selected";} ?> >Հայերեն</option>
	      <option value = "eng" <?php if($cont['lang'] == 'eng') {echo "selected";} ?> >Անգլերեն</option>
		  <option value = "rus" <?php if($cont['lang'] == 'rus') {echo "selected";} ?> >Ռուսերեն</option>
        </select></td>
      </tr>
  </table>
<br /><br />
		<div>
		<h3>Էջի պարունակությունը:</h3>

		<p>
		</p>


		<div>
			<textarea id="elm1" name="content" rows="15" cols="80" style="width: 80%" >
				<?=$cont['content'];?>
			</textarea>
<script type="text/javascript">
CKEDITOR.replace( 'elm1' );
</script>
		</div>

		<br />
		
	</div>
	<input type="submit" value="Փոփոխել">
	<input type="reset" name="reset" value="Reset" />
</form>

<script type="text/javascript">
if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>
