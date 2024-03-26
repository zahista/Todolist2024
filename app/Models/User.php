<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{
    protected $data = [];

    public function all()
    {
        return $this->database->sql('SELECT * from users');
    }
}
