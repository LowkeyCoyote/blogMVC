<?php

use Controller\controller;

require '../src/core/controller.php' ;
require '../src/controller/HomeController.php';

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
        $this->router->map('GET', '/listView/[*:slug]-[i:id]', function ($slug, $id) {
            $view = new Controller();
            $view->postView($slug, $id);
        });

    }

    public function run()
    {
        $match = $this->router->match();

        if (is_array($match)) {

            if (is_callable($match['target'])) {
                call_user_func_array($match['target'], $match['params']);
            } else {

                require "../template/{$match['target']}.php";
            }

        } else {
            $view = new controller();
            $view->errorView();
        }
    }


}