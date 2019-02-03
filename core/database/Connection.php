<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class Connection
{
    public static function make($config)
    {
        $dsn = "mysql:dbname={$config['name']};host={$config['connection']}";
        $user = $config['username'];
        $password = $config['password'];

        try {
            $dbh = new PDO($dsn, $user, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}