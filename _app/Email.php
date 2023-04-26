<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Email {

    private $mail = \stdClass::class;
    //Responsavel por setar todos os parâmetros de configuração da aplicação
    public function __construct ()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;
        $this->mail->isSMTP();
        $this->mail->Host       = 'mail.gustavoweb.me';
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = 'sender@gustavoweb.me';
        $this->mail->Password   = 'teste@123';
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Port       = 587;
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('gustavodev@gustavodev.me', 'Equipe Gustavo Web');
    }
    public function sendEmail($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replayEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar e-mail; {$this->mail->ErrorInfo} {$e->getMessage()}";
        }

    }
}
