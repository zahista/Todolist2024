<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\Todo;
use App\Models\User;
use App\Utils\Debug;
use App\Models\BaseModel;

class DashboardController
{
    public $todo;

    public function __construct()
    {
        $this->todo = new Todo();
    }

    public function show()
    {

        var_dump($this->todo->all());
        die();


        $filter = $_GET['todos_done'] ?? 0;

        if (Auth::user())
        {
            // pokud je v session user_id tak ukaž dashboard a data
            return View::render('dashboard', [
                'todos' => $this->todo->whereDone($filter),
                'modal_title' => 'Vytvořit nový úkol',
            ]);

        } else {
            //pokud ne tak se přesměruje na /login
            header('location: /Todolist2024/login');
        }
    }

    public function create()
    {
        $this->todo->create($_POST);
        header('location: /Todolist2024/');
    }

    public function update()
    {
        $this->todo->makeTodoDone($_GET['todo_id']);
        header('location: /Todolist2024/');
    }

    public function delete()
    {
        $this->todo->delete($_POST['todo_id']);
        header('location: /Todolist2024/');
    }
}
