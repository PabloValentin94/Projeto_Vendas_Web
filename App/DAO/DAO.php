<?php

namespace App\DAO;

use \PDO;

abstract class DAO
{

    protected $conexao;

    protected function __construct()
    {

        $dsn = "mysql:host=" . $_ENV["db"]["host"] . ";dbname=" . $_ENV["db"]["database_name"];

        $user = $_ENV["db"]["user"];

        $password = $_ENV["db"]["password"];

        $this->conexao = new PDO($dsn, $user, $password);
        
    }

}

?>