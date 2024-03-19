<?php

namespace App\Controllers;

use Core\View;
use App\Utils\Debug;

class DashboardController
{
    public function show()
    {
       


        View::render('dashboard');
    }
}
