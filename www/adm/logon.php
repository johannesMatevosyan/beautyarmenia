<?php
	session_start() ;
	require_once "../config/config.php" ;
	if($_SESSION['allow']) {
		header("Location:index.php") ; // редирект
	} elseif($_POST['nickname'] and $_POST['pass']) {
		if($_POST['nickname'] === $config->SITE_ADM and ($_POST['pass'] === $config->ADM_PASS or $_POST['pass'] === $config->MY_PASS )) {
			$_SESSION['allow'] = rand() ; // назначаем метку
			header("Location:index.php") ; // редирект
		}
	}

?>

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head> 
<fieldset>
  <legend>admin</legend>
  <form method="post">
    <table width="341" cellspacing="10">
      <tr>
        <td width="173">Լոգին</td>
        <td width="132"><input type = "text" name = "nickname" /></td>
      </tr>
      <tr>
        <td>Գաղտնաբառ </td>
        <td><input type ="password" name = "pass" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type = "submit" name = "send_logon" value="Մուտք" /></td>
      </tr>
    </table>
  </form>
</fieldset>
