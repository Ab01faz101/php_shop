<?php

use App\Http\Controllers\HomeController;
use Core\Router;

$router = Router::getInstance();


$router->addRoute('GET', '/', HomeController::class, 'index');


$router->resolve();
