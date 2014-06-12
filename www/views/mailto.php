<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['$mail'];}
if (isset($_POST['subject'])) {$subject = $_POST['subject'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}
if ($name === "" || $email=== "" || $subject === "" || $message === ""){
echo "<p><strong>Не заполнено одно из обязательных полей</strong></p>";
echo "<a href='/contact'>Вернуться на страницу с формой</a>";
exit;
}else{
$address = 'art@beautyarmenia.am';
$mes = "Вам новое сообщение от: $name \nПрисланное с: $email \nТема письма: $subject \nТекст сообщения: $message";
$mailFunc = mail ($address,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
if ($mailFunc == 'true')
{
echo "<p>Сообщение отправлено";
}
else 
{
echo "<p>Сообщение не отправлено";
}
}
?>