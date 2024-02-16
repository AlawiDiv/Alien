<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $API_KEY = "5873979994:AAEWqo00iFvcFqjj7ByUOBEHwgKOSQ2IQ3s";//Bot xabar yuboradigan tokeni
    $admin = 1813121392;//Qaysi odamga jo'natiladigan ID

    $text = urlencode("Xabar keldi.\nYuboruvchi ismi: $name\nEmail | TG username: $email\nMavzu: $subject\nXabari: $message");
    $url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
    file_get_contents($url);
?>