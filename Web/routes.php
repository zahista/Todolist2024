<?php 

use Core\Router;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\DashboardController;

$router = new Router();

$router->addRoute('/Todolist2024/', DashboardController::class, 'show', 'GET');
$router->addRoute('/Todolist2024/', DashboardController::class, 'create', 'POST');


$router->addRoute('/Todolist2024/login', LoginController::class, 'show', 'GET');
$router->addRoute('/Todolist2024/registrace', RegisterController::class, 'show', 'GET');





$router->run();
