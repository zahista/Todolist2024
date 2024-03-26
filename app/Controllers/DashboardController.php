<?php

namespace App\Controllers;

use Core\View;
use App\Models\Todo;
use App\Models\User;
use App\Utils\Debug;

class DashboardController
{
    public function show()
    {
       return View::render('dashboard', [
        'todos'=>(new Todo)->whereNotDone(), 
        'test' => 'Jsem dynamicky vytvořená proměná z pole'
        ]);
    }

    public function create()
    {
      (new Todo)->create($_POST);
       header('location: /Todolist2024/');
    }


    public function update() 
    {

    }

    public function delete()
    {

    }

}
