<?php

namespace App\Controllers;

class MailController extends BaseController
{
    public function sendMail()
    {

        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            $to = 'maxime-sav@outlook.fr';
            $subject = 'Est-ce que c\'est fonctionnel ?';
            $message = 'Si c\'est fonctionnel, je vais être content. Sinon eh bien tu vas être un peu spam.';

            $mailer = \Config\Services::email();

            $mailer->setFrom('maxime-sav@outlook.fr');
            $mailer->setReplyTo('maxime-sav@outlook.fr');

            $mailer->setSubject($subject);
            $mailer->setMessage($message);

            $mailer->setTo($to);

            $mailer->send();

            console_log($mailer->printDebugger());
            if ($mailer->isSent()) {
                echo 'Le mail a été envoyé avec succès.';
            } else {
                echo 'Le mail n\'a pas pu être envoyé.';
            }
        }

        return $this->response->setJSON(['success' => true]);
    }
}