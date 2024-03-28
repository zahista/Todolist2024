<?php

namespace App\Controllers;

use Core\View;
use App\Models\Todo;
use App\Models\User;
use App\Utils\Debug;

class DashboardController
{
    public $todo;

    public function __construct()
    {
        $this->todo = new Todo();
    }

    public function show()
    {

        //ověřit uživatel jse přihlášený


        return View::render('dashboard', [

            'todos' => $this->todo->all(),
            'modal_title' => 'Vytvořit nový úkol'

        ]);

        //pokud ne tak se přesměruje na /login
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
