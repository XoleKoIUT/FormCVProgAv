<?php

namespace App\Controllers;

use Faker\Provider\Base;

class NavigationBarController extends BaseController
{
    public function AboutMe()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_Content/aboutMe');
        echo view('commun/footer');
    }

    public function Interest()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_Content/interest');
        echo view('commun/footer');
    }

    public function Career()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_Content/career');
        echo view('commun/footer');
    }

    public function HardSkills()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_Content/hardSkills');
        echo view('commun/footer');
    }

    public function SoftSkills()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_Content/softSkills');
        echo view('commun/footer');
    }

    public function Project()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_Content/project');
        echo view('commun/footer');
    }

    public function Contact()
    {
        echo view ('commun/header');
        echo view ('commun/navBar');
        echo view('CV_content/contact');
        echo view('commun/footer');
    }
}