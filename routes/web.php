<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use Core\Router;

$router = Router::getInstance();

// admin routes
$router->addRoute('GET', '/admin', AdminController::class, 'index');






// site routes
$router->addRoute('GET', '/', HomeController::class, 'index');


$router->resolve();
