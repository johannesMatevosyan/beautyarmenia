
<form method="post" >
<table width="681" cellspacing="5">
	  <tr>
	    <td>Փնտրող համակարգի համար բառեր:</td>
	    <td><input type="text" name = "keywords" /></td>
      </tr>
	  <tr>
	    <td>Էջի անունը:</td>
	    <td><input type="text" name = "title" /></td>
      </tr>
	  <tr>
	    <td>Նկարագրություն:        </td>
	    <td><input type="text" name = "description" /></td>
      </tr>
	  <tr>
	    <td> Մենյուի անունը:  </td>
	    <td><input type="text" name = "menu_name" /></td>
      </tr>
	  <tr>
	    <td >URL&nbsp;:<span style="float:right"><?='http://'.$config->BASE_URL.'&nbsp;/';?></span></td>
	    <td><input type="text" name = "uri" /></td>
      </tr>
	  <tr>
	  <tr>
	    <td height="21" >Էջի լեզուն:</td>
	    <td ><select name = "lang" id = "lang">
	      <option value = "arm">Հայերեն</option>
	      <option value = "eng">Անգլերեն</option>
		  <option value = "rus">Ռուսերեն</option>
        </select></td>
      </tr>
	    <td>Մենյուի դիրքը: </td>
	    <td><select name = "position" id = "position">
	     
        </select></td>
      </tr>
	  <tr>
	    <td height="21" >Էջերի երեվալը:</td>
	    <td><select name = "visible">
	      <option value = "1">Երևացող</option>
	      <option value = "0">Թաքնված</option>
        </select></td>
      </tr>
	  
  </table>
<br />
	<br />
	<div>
		<h3>Էջի պարունակությունը:</h3>

		<p>
		</p>


		<div>
			<textarea id="elm1" name="content" rows="15" cols="80" style="width: 80%" >
			</textarea>
<script type="text/javascript">
CKEDITOR.replace( 'elm1' );
</script>			
		</div>
		<br />
		
	</div>

	<input type="submit" name="create" value="Ստեղծել">
	<input type="reset" name="reset" value="Reset" />
</form>
<script type="text/javascript">

var lang = $('#lang option:selected').val();
$('#position').load('ajax_get_pos_pages.php',{lang : lang});

$('#lang').change( function(){
var lang = $('#lang option:selected').val();
 $('#position').load('ajax_get_pos_pages.php',{lang : lang});
} )

if (document.location.protocol == 'file:') {
	alert("The examples might not work properly on the local file system due to security settings in your browser. Please use a real webserver.");
}
</script>

