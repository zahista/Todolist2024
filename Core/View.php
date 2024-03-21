<?php

namespace Core;

use App\Models\Todo;

class View
{
    public static function render($view_name, $data = [])
    {
        foreach ($data ?? [] as $variable_name => $value) {
            $variable_name = $variable_name;
            $$variable_name = $value;
        }

        include "Views/$view_name.php";
    }
}
