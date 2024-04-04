<?php

namespace App\Models;

use Core\Auth;


class Todo extends BaseModel
{
    public function all()
    {
        return $this->medoo->select('todos', '*');
    }

    public function whereDone($bool)
    {
        return $this->database->dotaz("SELECT * from todos where done = $bool AND user_id =". Auth::user());
    }

    public function create(array $data = [])
    {
        $sql = "INSERT INTO todos (title, description ,done, user_id) VALUES 
        (" . "'" . $data['todo'] . "'" . ", " . "'" . $data['description'] . "'" . ", 0, ".$data['user_id']." )";

        $this->database->dotaz($sql);
    }

    public function makeTodoDone(int $id)
    {
        $sql = "UPDATE todos SET done = 1 WHERE id = $id";

        $this->database->dotaz($sql);
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM todos WHERE id = $id";

        $this->database->dotaz($sql);
    }
}
