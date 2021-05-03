<?php

namespace App\core;


/*
require '../src/Core/Controller.php' ;
require '../src/Controller/HomeController.php';
*/


use AltoRouter;
use App\Controller\HomeController;
use App\Controller\RegisterController;

class Router
{

    /**
     * @var AltoRouter
     */

    private $router;


    public function __construct()
    {
        $this->router = new AltoRouter();
    }

    public function makeMap()
    {

        $this->router->map('GET', '/', function () {
            $view = new HomeController();
            $view->homeView();
        });
        $this->router->map('GET', '/loginView', function () {
            $view = new Controller();
            $view->loginView();
        });
        $this->router->map('GET', '/contact', function () {
            $view = new Controller();
            $view->contactView();
        });
        $this->router->map('GET', '/list/post', function () {
            $view = new Controller();
            $view->postView();
        });
        $this->router->map('GET','/list',function (){
            $view = new Controller();
            $view->listView();
        });
        $this->router->map('GET','/register',function (){
            $view = new Controller();
            $view->registerView();
        });


    }

    public function run()
    {
        $match = $this->router->match();

        if (is_array($match)) {

            if (is_callable($match['target'])) {
                call_user_func_array($match['target'], $match['params']);
            } else {
                die('problème');

                require "../template/{$match['target']}.php";
            }

        } else {
            $view = new Controller();
            $view->errorView();
        }
    }


}