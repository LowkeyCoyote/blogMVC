<?php


namespace App\core;

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

    public function errorView()
    {
        require '../template/view/404.html.twig';
    }

    public function loginView()
    {
        echo $this->twig->render('loginView.html.twig');
    }

    public function contactView()
    {
        echo $this->twig->render('contact.html.twig');
    }

    public function postView()
    {
        echo $this->twig->render('postView.html.twig');
    }
    public function listView()
    {
        echo $this->twig->render('list.html.twig');
    }

    public function registerView()
    {
        echo $this->twig->render('registerView.html.twig');
    }


}
