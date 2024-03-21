<?php 

namespace App\Models;


class BaseModel 
{
    protected $data = [];

    public function all()
    {
        return $this->data;
    }

    public function find($id)
    {
        //vrátí usera s konkrétním ID
    }
}