<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "mail.gleysondev.me", "sender@gleysondev.me", "teste@123",
    "tls", "587", "gleysondev@dev.me", "Gleyson Alves");

$novoEmail->sendEmail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b></p>",
    "gustavo@gustavoweb.me", "Gustavo Web", "gleysondev@yahoo.com", "Gleyson");

var_dump($novoEmail);
