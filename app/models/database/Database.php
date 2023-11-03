<?php

namespace app\models\database;

use PDO;

abstract class Database
{
    private ?PDO $connection = null;

    public static function getConnection(): PDO
    {
        if (is_null(self::$connection)) {
            static::$connection = new PDO("mysql:host=localhost; dbname=rede_social","root","", [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
            ]);
        }

        return self::$connection;
    }
}
