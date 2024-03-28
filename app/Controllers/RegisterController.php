<?php

namespace App\Controllers;

use Core\View;
use App\Models\User;

class RegisterController
{
    public function show()
    {
        View::render('register');
    }

    public function create()
    {
        (new User)->create($_POST);
    }
}
