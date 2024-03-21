<?php

namespace App\Controllers;

use Core\View;
use App\Models\Todo;
use App\Utils\Debug;

class DashboardController
{
    public function show()
    {
       return View::render('dashboard', [
        'todos'=> (new Todo)->all(), 
        ]);
    }

    public function create()
    {
        var_dump($_POST);
    }


    public function update() 
    {

    }


    public function delete()
    {

    }


}
