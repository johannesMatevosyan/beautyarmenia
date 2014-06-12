<?php
	session_start() ;
	require_once "../config/config.php" ;
//	require_once "{$config->APP_PATH}" ;
	if($_SESSION['allow']) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src=" https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script  src="/ckeditor/ckeditor.js">
</script>
</head>
<body>
<a href = "?page=create">Ստեղծել նոր էջ</a> - - <a href = "?page=list">Էջերի ցուցակը</a> &nbsp;&nbsp; || &nbsp;&nbsp; <a href = "?page=createnews">Ստեղծել նորություն</a> - - <a href = "?page=listnews">Նորություների ցուցակը</a> <hr />

<?php
	if($_POST) { // если отправлены данные, срабатывает этот блок
		
		if($_GET['page'] == "create") {
		require_once "{$config->APP_PATH}/controllers/ccreateedit.php" ;
			$vcreateedit->post_data($_POST) ;
		} elseif($_GET['edit']) {
		require_once "{$config->APP_PATH}/controllers/ccreateedit.php" ;
			$vcreateedit->update_data($_POST) ;
		} elseif($_GET['page'] == "createnews") { 
		require_once "{$config->APP_PATH}/controllers/ccreateeditnews.php" ;
		$vcreateedit->post_data($_POST) ;
		}elseif($_GET['editnews']) { 
		require_once "{$config->APP_PATH}/controllers/ccreateeditnews.php" ;
		$vcreateedit->update_data($_POST) ;
		}
			
	}
	
	if($_GET['page'] == "create") { // если УРИ страницы ?page=create, срабатывает этот блок кода
		require_once "{$config->APP_PATH}/controllers/ccreateedit.php" ;
		require_once "{$config->APP_PATH}/views/vcreate.php" ;		
	}
	if($_GET['page'] == "createnews") { // если УРИ страницы ?page=create, срабатывает этот блок кода
		require_once "{$config->APP_PATH}/controllers/ccreateeditnews.php" ;
		require_once "{$config->APP_PATH}/views/vcreatenews.php" ;		
	}
	
	if($_GET['page'] == "list") {
		require_once "{$config->APP_PATH}/controllers/ccreateedit.php" ;
		require_once "{$config->APP_PATH}/views/vlist.php" ;
	}
	if($_GET['page'] == "listnews") {
		require_once "{$config->APP_PATH}/controllers/ccreateeditnews.php" ;
		require_once "{$config->APP_PATH}/views/vlistnews.php" ;
	}
	
	if($_GET['edit']) {
		require_once "{$config->APP_PATH}/controllers/ccreateedit.php" ;
		require_once "{$config->APP_PATH}/views/vedit.php" ;
	}
	if($_GET['editnews']) {
		require_once "{$config->APP_PATH}/controllers/ccreateeditnews.php" ;
		require_once "{$config->APP_PATH}/views/veditnews.php" ;
	}
	
	if($_GET['delete']) {
		require_once "{$config->APP_PATH}/controllers/ccreateedit.php" ;
		$vcreateedit->del_page($_GET['delete']) ;
		require_once "{$config->APP_PATH}/views/vlist.php" ;
	}
	if($_GET['deletenews']) {
		require_once "{$config->APP_PATH}/controllers/ccreateeditnews.php" ;
		$vcreateedit->del_page($_GET['deletenews']) ;
		require_once "{$config->APP_PATH}/views/vlistnews.php" ;
	}
}
?>


</body>
</html>