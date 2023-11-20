<?php

namespace App\Controllers;

class MailController extends BaseController
{
    public function sendMail()
    {
        $to = 'xolekoiut76@gmail.com';
        $subject = 'Est-ce que c\'est fonctionnel ?';
        $message = 'Si c\'est fonctionnel, je vais être content. Sinon eh bien tu vas être un peu spam.';

        $mailer = \Config\Services::email();

        $mailer->setFrom('xolekiut76@gmail.com');
        $mailer->setReplyTo('xolekoiut76@gmail.com');

        $mailer->setSubject($subject);
        $mailer->setMessage($message);
        $mailer->setTo($to);

        if ($mailer->send()) {
            echo 'Le mail a été envoyé avec succès.';
        } else {
            echo 'Le mail n\'a pas pu être envoyé.';
        }
    }
}