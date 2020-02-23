<?php


use phpmailer\phpmailer\PHPMailer;
use phpmailer\phpmailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'consts.php';

function is_in(){
    if (isset($_COOKIE['ok']))
        return $_COOKIE['ok'];
    return 0;
}

function sign_in(){
    setcookie("ok", "1", time() + 24 * 3600 * 30);
}


function sendConfimCode($email = "buloch03@yandex.ru"){

    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';

// Настройки SMTP
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;
    global $HOST, $MAIL, $PASS;
    $mail->Host = $HOST;
    $mail->Port = 465;
    $mail->Username = $MAIL;
    $mail->Password = $PASS;

// От кого
    $mail->setFrom($MAIL, 'Cyprus Alpha');

// Кому
    $mail->addAddress($email);

// Тема письма
    $mail->Subject = "Complete the registration";

// Тело письма
    $code = rand(1000, 9999);
    $body = "<p style='font-family: Arial'>
Thank you for your registration on our site.<BR>
<strong>Your confirmation code is $code</strong></p>";
    $mail->msgHTML($body);

    $mail->send();
}