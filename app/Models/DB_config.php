<?php

namespace App\Models;

/**
 * Class DB_config
 * @package App\Models
 */
class DB_config
{
    /**
     * @var \PDO
     */
    public $pdo;

    /**
     * DB_config constructor.
     */
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
        return $this;
    }
}
