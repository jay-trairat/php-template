<?php

namespace Helper;

use PDO;

class Database
{
    public static function connect()
    {
        $dbHost = "localhost";
        $dbName = "database";
        $dbUsername = "root";
        $dbPassword = "";

        $connector = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8;", $dbUsername, $dbPassword);
        $connector->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $connector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connector;
    }
}
