<?php

namespace Core;

use App\Models\Todo;

class View
{
    public static function render($view_name, $data = [])
    {
        foreach ($data ?? [] as $key => $value) {
            $$key = $value;
        }

        include "Views/$view_name.php";
    }
}