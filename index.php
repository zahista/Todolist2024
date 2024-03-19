<?php 

use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\DashboardController;

error_reporting(E_ALL);
ini_set("display_errors", 1);

require "autoload.php";

// zjisti co je napsáno v URL


$url = $_SERVER['REQUEST_URI'];
$url = parse_url($url)['path'];

// definovat platné adresy a pro ně adekvátní kontolery 
$routes = 
[
    "/Todolist2024/" => [
        'controller'=> DashboardController::class,
        'callback' => 'show'
    ],
    "/Todolist2024/login" => [
        'controller'=> LoginController::class,
        'callback' => 'show'
    ],
    "/Todolist2024/registrace" => [
        'controller'=> RegisterController::class,
        'callback' => 'show'
    ],
];


if (array_key_exists($url, $routes))
{
    //inicializovat daný kontroler 
    $controller = $routes[$url]['controller'];
    $callback =  $routes[$url]['callback'];

    $controller = new $controller();
    $controller->$callback();

}else
{
    echo "404";
}







