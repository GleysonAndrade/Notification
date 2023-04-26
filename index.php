<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendEmail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b></p>",
    "gustavo@gustavoweb.me", "Gustavo Web", "gleysondev@yahoo.com", "Gleyson");

var_dump($novoEmail);
