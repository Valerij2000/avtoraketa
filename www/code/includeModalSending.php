<?php
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
?>
