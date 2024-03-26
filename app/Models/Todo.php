<?php

namespace App\Models;

use Core\Database;

class Todo extends BaseModel
{
    public function all()
    {
        return $this->database->dotaz('SELECT * from todos');
    }

    public function whereDone()
    {
        return $this->database->dotaz('SELECT * from todos where done = 1');
    }

    public function whereNotDone()
    {
        return $this->database->dotaz('SELECT * from todos where done = 0');
    }

    public function create($data = [])
    {
        $sql = "INSERT INTO todos (title, description ,done, user_id) VALUES 
        ("."'".$data['todo']."'".", "."'".$data['description']."'".", 0, 34)";

        $this->database->dotaz($sql);
    }
}
