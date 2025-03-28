<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Panel\PanelController;
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
// shop
$router->addRoute('GET', '/admin/orders', ProductController::class, 'orders');





// auth
$router->addRoute('GET', '/auth/login', AuthController::class, 'loginView');
$router->addRoute('GET', '/auth/register', AuthController::class, 'registerView');
$router->addRoute('GET', '/auth/change-password', AuthController::class, 'passwordChangeView');


$router->addRoute('POST', '/auth/login', AuthController::class, 'login');
$router->addRoute('POST', '/auth/register', AuthController::class, 'register');
$router->addRoute('POST', '/auth/password', AuthController::class, 'passwordChange');
$router->addRoute('GET', '/auth/logout', AuthController::class,  'logout');


// panel
$router->addRoute('GET', '/panel',PanelController::class, 'panel');
$router->addRoute('GET', '/panel/personal',PanelController::class, 'personal');
$router->addRoute('GET', '/panel/address',PanelController::class, 'address');
$router->addRoute('GET', '/panel/orders',PanelController::class, 'orders');
$router->addRoute('GET', '/panel/personal/edit',PanelController::class, 'personalEdit');
$router->addRoute('POST', '/panel/personal/edit',PanelController::class, 'personalUpdate');

// address
$router->addRoute('POST', '/panel/address/store',PanelController::class, 'storeAddress');
$router->addRoute('GET', '/panel/address/delete',PanelController::class, 'deleteAddress');
$router->addRoute('POST', '/panel/address/get-city',PanelController::class, 'getCity');

// order ---------------------------------------------------------------------------------------------------------------
$router->addRoute('GET', '/cart',OrderController::class, 'cart');
$router->addRoute('GET', '/cart/add',OrderController::class, 'addToCart');
$router->addRoute('GET', '/cart/remove',OrderController::class, 'removeToCart');
$router->addRoute('GET', '/cart/plus',OrderController::class, 'plus');
$router->addRoute('GET', '/cart/min',OrderController::class, 'min');

// create order
$router->addRoute('GET', '/order-result',OrderController::class, 'order');
$router->addRoute('POST', '/order-store',OrderController::class, 'orderStore');
$router->addRoute('GET', '/pay-order',OrderController::class, 'payOrder');
$router->addRoute('post', '/confirm-order',OrderController::class, 'confirmOrder');
$router->addRoute('GET', '/success-order',OrderController::class, 'success');







// site routes
$router->addRoute('GET', '/', HomeController::class, 'index');
$router->addRoute('GET', '/welcome', HomeController::class, 'welcome');
$router->addRoute('GET', '/product', HomeController::class, 'product');
$router->addRoute('GET', '/404', HomeController::class, 'notFound');


$router->resolve();
