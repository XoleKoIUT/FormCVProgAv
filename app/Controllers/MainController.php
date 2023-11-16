<?php

namespace App\Controllers;
use App\Helpers\Mailer;

class MainController extends BaseController
{
    public function index()
    {
        echo view ('commun/header');
        echo view('commun/navBar');
        echo view('CV_Content/content');
        echo view('commun/footer');
    }
}