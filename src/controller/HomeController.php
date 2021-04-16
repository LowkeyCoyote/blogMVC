<?php

use Controller\controller;

class HomeController extends Controller
{

    public function homeView()
    {
        echo $this->twig->render('homeView.html.twig');
    }


}
