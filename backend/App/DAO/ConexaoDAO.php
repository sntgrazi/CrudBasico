<?php

namespace App\DAO;


abstract class ConexaoDAO{

    protected $pdo;

    public function __construct(){

        $host = 'localhost';
        $port = '3306';
        $user = 'root';
        $pass = '';
        $db = 'pet';   

        $dsn = "mysql:host={$host};dbname={$db};port={$port}";

        $this->pdo = new \PDO ($dsn, $user, $pass);
        $this->pdo->setAttribute(
            \PDO::ATTR_ERRMODE,
            \PDO::ERRMODE_EXCEPTION
        );
    }
}