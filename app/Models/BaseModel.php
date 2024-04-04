<?php 

namespace App\Models;

use Medoo\Medoo;
use Core\Database;
use App\Controllers\DashboardController;

class BaseModel 
{
    protected $database;
    protected $medoo;

    public function __construct()
    {
        $this->database = new Database();

        $this->medoo = new Medoo([
            'type' => 'mysql',
            'host' => 'localhost',
            'database' => 'todoapp',
            'username' => 'root',
            'password' => '',
        ]);
    }
}