<?php

namespace App\Models;

class DB_config
{
    public $pdo;

    function __construct()
    {
        try {
            $dsn = 'mysql:host=mysql;dbname=server;charset=utf8';
            $usr = 'root';
            $pwd = 'root';
            $this->pdo = new \PDO($dsn, $usr, $pwd);
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
