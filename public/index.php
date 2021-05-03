<?php
require '../vendor/autoload.php';


$router = new \App\core\Router();
$router->makeMap();
$router->run();















