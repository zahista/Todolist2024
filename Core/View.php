<?php

namespace Core;

class View
{
    public static function render($view_name)
    {
        $todos  = [];

        include "views/$view_name.php";
    }
}
