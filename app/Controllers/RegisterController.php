<?php

namespace App\Controllers;

use Core\Auth;
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
        // vyzkoušej vytvořit usera (pokud ještě není registrovaán)
        if((new User)->create($_POST))
        {
            //pokud se to povedlo tak ho rovnou přihlaš a přesměruj do aplikace
            $user_id = (new User)->findByEmail($_POST['email'])['id'];
            Auth::login($user_id);
            header('location: /Todolist2024/');
        }else{
            // pokud ne (email už existuje)tak ho přesměruj zpátky na registrační formulář
            header('location: /Todolist2024/registrace?error=email_taken');
        }
    }
}
