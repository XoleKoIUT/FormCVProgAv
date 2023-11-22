<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class MailController extends Controller
{
    public function index()
    {
        echo view('commun/header');
        echo view('commun/navBar');
        echo view('CV_content/contact');
        echo view('commun/footer');
    }

    public function traitement()
    {
        $validation = \Config\Services::validation();
        $donnees = [
            'email' => 'required|valid_email',
            'subject' => 'required|min_length[3]|max_length[50]',
            'message' => 'required|min_length[3]|max_length[200]'
        ];

        if ($this->validate($donnees)) {
            $donnees = $this->request->getPost();
            $this->sendMail($donnees);
        } else {
            echo view('contact');
        }
    }

    public function sendMail($donnees)
    {
        $mailer = \Config\Services::email();

        $mailer->setTo($donnees['email']);
        $mailer->setSubject($donnees['subject']);
        $mailer->setMessage($donnees['message']);

        if ($mailer->send()) {
            $this->index();
            echo '<script>afficherSucces();</script>';
        } else {
            echo 'je te chie dans la bouche';
        }
    }
}