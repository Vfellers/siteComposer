<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once __DIR__."/../vendor/autoload.php";


$m = new PHPMailer();
$m->SMTPDebug = SMTP::DEBUG_SERVER;
$m->isSMTP();

$m->Host = "sandbox.smtp.mailtrap.io";
$m->SMTPAuth = true;
$m->Username = "9a52cf094b6571";
$m->Password = "5e9f1e41d45425";
$m->Port = 2525;

//configuração da mensagem
$m->CharSet = PHPMailer::CHARSET_UTF8;
$m->setFrom("victor.fellers@gmail.com", "Victor");
$m->addAddress("victor.feller@hotmail.com");
$m->isHTML(true);
$m->Subject = "TESTE";
$m->Body = <<<HTML
    <h1>Testando o email</h1>
    <p>Aparentemente, deu certo!</p>
HTML;

if($m->send()){
    echo "Mensagem Enviada.";
} else {
    echo $m->ErrorInfo;
}