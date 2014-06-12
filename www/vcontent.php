<?session_start();if (empty($_GET['lang']) and !isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'arm';
}; if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
};$lang = $_SESSION['lang'];require_once "controllers/ccontent.php";?>
<!DOCTYPE HTML PUBLIC"-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="GENERATOR" content="EDGESTILE SiteEdit">
    <meta content="<?=$page['keywords']?>" name="keywords">
    <meta content="<?=$page['description']?>" name="description">
    <title><?=$page['title']?></title>
    <script type="text/javascript" src=""></script>
    <link href="views/skin/default.css" rel="stylesheet" type="text/css">
    <link href="views/skin/skin_home.css" rel="stylesheet" type="text/css">
</head>
<body>
<table border="0" cellspacing="0" cellpadding="0" width="100%" id="table3">
    <tr id="tr12">
        <div class="header">
            <div class="logo"><a href="http://beautyarmenia.am/"></a></div>
            <div class="header_right">
			<?php require_once "views/head.php"; ?>

                <div class="partners"><a href="http://claudiapazzini.it" target="_blank"><img hspace="30" src="views/images/pazzini.jpg" alt=""></a><a href="http://www.bell.com.pl"  target="_blank"><img
                    src="views/images/Bell.jpg" alt=""></a></div>
            </div>
            <div class="bottom_line"></div>
        </div>
        <div class="main-menu">
            <div class="mul_box"><a href="?lang=arm">ARM</a> <span class="divivder"></span> <a href="?lang=rus">RUS</a>
                <span class="divivder"></span> <a href="?lang=eng">ENG</a> </div>
				<br/><br/><?php require_once "views/vmenu.php"; ?>
        </div><br/>
        <td valign="top" align="left" id="td13">
            <table border="0" cellspacing="0" cellpadding="0" width="100%" id="table14">
                <tr id="tr15">
                    <td valign="top" align="left" id="td16" >&nbsp;
                        <div id="content"><?=$page['content'];?></div>
                    </td>
                    <? require_once "news.php";?>
                </tr>
            </table>
        </td>
    </tr>
    <tr id="tr18">
        <td valign="top" align="center" id="td19">
            <div id="pageMainmenu"><?php require_once "views/vmenu_bottom.php"; ?></div>
			<?php require_once "views/footer.php"; ?>

        </td>
    </tr>
</table>
</body>
</html>