<?php


namespace Controller;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{

    protected $loader;
    protected $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('../template/view');
        $this->twig = new Environment($this->loader, ['cache' => false,
        ]);
    }
/*
    public function homeView()
    {
        echo $this->twig->render('homeView.html.twig');
    }
*/
    public function errorView()
    {
        require '../template/view/404.html.twig';
    }

    public function loginView()
    {
        echo $this->twig->render('loginView.twig');
    }

    public function contactView()
    {
        echo $this->twig->render('contact.html.twig');
    }

    public function postView()
    {
        echo $this->twig->render('listView/postView.html.twig');
    }

}
