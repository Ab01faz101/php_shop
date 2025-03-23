<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Core\Router;

$router = Router::getInstance();

// admin routes
$router->addRoute('GET', '/admin', AdminController::class, 'index');

// category
$router->addRoute('GET', '/admin/category', CategoryController::class, 'index');
$router->addRoute('GET', '/admin/category/create', CategoryController::class, 'create');
$router->addRoute('POST', '/admin/category/store', CategoryController::class, 'store');
$router->addRoute('GET', '/admin/category/edit', CategoryController::class, 'edit');
$router->addRoute('POST', '/admin/category/update', CategoryController::class, 'update');
$router->addRoute('POST', '/admin/category/delete', CategoryController::class, 'delete');
// product
$router->addRoute('GET', '/admin/product', ProductController::class, 'index');
$router->addRoute('GET', '/admin/product/create', ProductController::class, 'create');
$router->addRoute('POST', '/admin/product/store', ProductController::class, 'store');
$router->addRoute('GET', '/admin/product/edit', ProductController::class, 'edit');
$router->addRoute('POST', '/admin/product/update', ProductController::class, 'update');
$router->addRoute('POST', '/admin/product/delete', ProductController::class, 'delete');





// auth
$router->addRoute('GET', '/auth/login', AuthController::class, 'loginView');
$router->addRoute('GET', '/auth/register', AuthController::class, 'registerView');
$router->addRoute('GET', '/auth/chage-password', AuthController::class, 'passwordChangeView');


$router->addRoute('POST', '/auth/login', AuthController::class, 'login');
$router->addRoute('POST', '/auth/register', AuthController::class, 'register');
$router->addRoute('POST', '/auth/password', AuthController::class, 'passwordChange');
$router->addRoute('GET', '/auth/logout', AuthController::class, action: 'logout');













// site routes
$router->addRoute('GET', '/', HomeController::class, 'index');


$router->resolve();
