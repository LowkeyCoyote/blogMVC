<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{

    public function homeView()
    {
        echo $this->twig->render('Home/index.html.twig');
    }


}
