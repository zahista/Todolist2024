<?php

namespace Core;

use Core\View;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;

class Router
{
    public $routes = [];

    public function addRoute($route, $controller, $callback, $http_method)
    {
        $this->routes[$http_method.$route] =
            [
                'controller' => $controller,
                'callback' => $callback,
            ];
    }

    public function run()
    {
        $url = $_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'];
        $url = parse_url($url)['path'];

        if (array_key_exists($url, $this->routes)) {
            //inicializovat daný kontroler 
            $controller = $this->routes[$url]['controller'];
            $callback =  $this->routes[$url]['callback'];

            $controller = new $controller();

            $controller->$callback();
        } else {
            // echo "404";
            View::render('404');
        }
    }
}
