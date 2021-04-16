<?php

require '../vendor/autoload.php';
require '../src/core/Router.php';


$router = new router();
$router->makeMap();
$router->run();













