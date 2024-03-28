<?php

namespace App\Models;

use App\Utils\Debug;
use App\Models\BaseModel;

class User extends BaseModel
{
    protected $data = [];

    public function all()
    {
        return $this->database->sql('SELECT * from users');
    }

    public function create($data)
    {
        // v příchozím poli modifikuju heslo za heslo, které je zahashované
        $data['password'] =  password_hash($data['password'], PASSWORD_DEFAULT);

        //zkontroluj jestli email je v DB 
        if($this->exists($data['email']))
        {
            //přesměruj zpět na registraci s chybou
            return header('location: /Todolist2024/registrace?error=email_taken');
            die();
        }    


        //pokud se to dostalo sem tak se vytvoří user v DB
        $sql = "INSERT INTO users (email, password) VALUES 
        (" . "'" . $data['email'] . "'" . ", " . "'" . $data['password'] . "'" . ")";

        $this->database->dotaz($sql);
    }


    public function exists(string $email)
    {
        $sql ="SELECT email from users WHERE email = '$email'";    

        if (count($this->database->dotaz($sql)) > 0 )
        {
            return true;
        }else{
            return false;
        }
    }

}
