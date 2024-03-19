<?php 

namespace App\Controllers;

use Core\View;

class RegisterController 
{

    public function show()
    {
        View::render('register');
    }

}