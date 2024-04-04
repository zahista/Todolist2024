<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;

class LoginController
{
    public function show()
    {
        View::render('login', ['title' => 'pokussssssss']);
    }

    public function create()
    {
        //pokud zadaný email existuje 
        if ((new User)->exists($_POST['email'])) {

            //najdi uživatele 
            $user = (new User)->findByEmail($_POST['email']);
            // zkontroluj jestli sedí heslo 
            $password_hash = $user['password'];
            $password = $_POST['password'];

            if (password_verify($password, $password_hash)) {

                // a proveď přihlášení 
                Auth::login($user['id']);

                return header('location: /Todolist2024/');
            } else {
                //pokud heslo nesedí tak vrať na login s chybout
                return header('location: /Todolist2024/login?error=wrong_credentials');
            }
        }


        // jinak vrať zpátky na login s chybou, že přihlašovací údaje nejsou platné 
       return header('location: /Todolist2024/login?error=wrong_credentials');
    }

    public function logout()
    {
        Auth::logout();
        return header('location: /Todolist2024/login');
    }
}

