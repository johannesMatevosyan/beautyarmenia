<?php
/*
Получаем URL в переменную $result в случае
yourdomain.com/name-page.html в $result окажется строка:
/name-page.html
*/
error_reporting(E_ERROR);
$result = $_SERVER['REQUEST_URI'];
/*
проверяем, что бы в URL не было ничего, кроме символов
алфавита (a-zA-Z), цифр (0-9), а также . / – _ # ? =
в противном случае – выдать ошибку 404
*/
if (preg_match ("/([^a-zA-Z0-9\.\/\-\_\#\?\=])/", $result)) {
header("HTTP/1.0 404 Not Found");
echo "Недопустимые символы в URL";
exit;
}
/*
отбрасываем из ЧПУ всё лишнее, оставляя только имя
виртуального html-файла. В случае с yourdomain.com/name-page.html
это будет name-page функция preg_split формирует массив,
разбивая переданную строку по заданной маске.
*/
$array_url = preg_split ("/(\/|\..*$)/", $result,1, PREG_SPLIT_NO_EMPTY);
$array_url = explode('?', $array_url[0]);//avelacnum em vorpeszi ktri harcakani mas@
/*
в случае, если обращение было только к домену
(yourdomain.com/ или yourdomain.com), в $array_url будет
пустой результат, такое событие нужно обработать, как страницу
с ID_page = 1
*/
$uri_value = $array_url[0];
/*
if (!$array_url) {
$ID_page = 1;
}else{
$uri_value = $array_url[0];
Далее идёт запрос в БД о наличие в столбце SEF строки $sef_value
при положительном ответе получаем из БД соответствующий $sef_value $ID_page,
если такой строки не найдено – выводим страницу ошибки 404.
}
Теперь обычная обработка, как если бы $ID_page был получен методом GET
*/
	require_once "config/config.php" ;
//	require_once "views/vmenu.php" ;
	require_once "{$config->APP_PATH}/views/vcontent.php" ;
?>
