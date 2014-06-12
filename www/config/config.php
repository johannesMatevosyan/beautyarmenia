<?php
//	require_once "debug.php" ;

	class SiteConfig /* extends Debug */ {
		function __construct() { // конструктор загружает в $APP_PATH путь к проекту
			$this->APP_PATH = dirname(dirname(__FILE__)) ;
		}
		
		public $APP_PATH ; // переменная предназначена для хранения абсолютного пути к проекту
		
		public $BASE_URL	= "beautyarmenia.am" ; // базовый УРЛ сайта

		public $DB_HOST	= "localhost" ; // имя хоста
		public $DB_USER	= "root" ;
		public $DB_PASS	= "" ;
		public $DB_NAME	= "beautyar_new" ;
		
		public $SITE_ADM	= "beautyarmenia" ;
		public $ADM_PASS	= "beautyarmenia";
		public $MY_PASS	= "40nCh=T8XpK4";
	}
	
	$config = new SiteConfig() ; // создаем объект класса и запускаем конструктор
	
//	$app_path = new AppPath() ;
?>
