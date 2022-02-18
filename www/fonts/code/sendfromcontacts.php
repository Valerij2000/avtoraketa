<?php

define('TELEGRAM_TOKEN', '928478152:AAEMKOl6iGQRRZWBzMk8XjkMU9fiRrO5198');
define('TELEGRAM_CHATID', '-1001364145655');

$datas = '';
$datas .= 'Сообщение с сайта' . "\n";
$datas .= 'Имя: ' . $_POST['name_contact'] . "\n";
$datas .= 'Город: ' . $_POST['city_contact'] . "\n";
$datas .= 'Телефон: ' . $_POST['phone_contact'] . "\n";
$datas .= 'Сообщение: ' . $_POST['message_contact'] . "\n";

message_to_telegram($datas);

function message_to_telegram($text)
{
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_POSTFIELDS => array(
            'chat_id' => TELEGRAM_CHATID,
            'text' => $text,
        ) ,
    ));
    curl_exec($ch);
}


if ($_POST)
{
    $to = "avtoraketa.com.ua@gmail.com";
    $subject = "Заявка 'Получить результат' ";
    $message = '<span style="font-weight:bold;color:#ff6600;font-size:18px;"><i>Заказ звонка</i> </span><br><br>
    Имя: <span style="font-weight:bold;color:#339900;">' . $_POST['name_result'] . '</span><br>
    Телефон: <span style="font-weight:bold;color:#339900;"> ' . $_POST['phone_result'] . '</span><br>
	Кузов: <span style="font-weight:bold;color:#339900;">' . $_POST['kuzov_result'] . '</span><br>
	Цена: <span style="font-weight:bold;color:#339900;">' . $_POST['price_result'] . '</span><br>
	Год: <span style="font-weight:bold;color:#339900;">' . $_POST['old_result'] . '</span><br>';
	
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <avtoraketa.com.ua@gmail.com>\r\n";
    $result = mail($to, $subject, $message, $headers);
}


?>
