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

    public function create(array $data = [])
    {
        $sql = "INSERT INTO todos (title, description ,done, user_id) VALUES 
        (" . "'" . $data['todo'] . "'" . ", " . "'" . $data['description'] . "'" . ", 0, 34)";

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
