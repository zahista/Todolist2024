<?php

namespace Core;

use mysqli;


class Database
{
    protected $connection;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "todoapp";


        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
        $this->connection = $connection;
    }

    public function dotaz(string $sql)
    {
        $result  = $this->connection->query($sql);

        // pokud promena sql obashuje slovo select tak se pusti fetch jinak ne
        if(strpos($sql, "SELECT") !== false){
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

}
