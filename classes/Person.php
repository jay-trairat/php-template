<?php

namespace Model;

use Helper\Database;
use PDO;

require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
class Person
{

    public static function findAll()
    {
        try {

            $connector = new Database;
            $conn = $connector->connect();
            $stmt = $conn->prepare("select * from person limit 10");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return json_encode(["result" => $result]);
        } catch (Exception $e) {
            echo $e;
        }
    }

    public static function findById($id)
    {
        try {

            $connector = new Database;
            $conn = $connector->connect();
            $stmt = $conn->prepare("select * from person where id like :id");
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return json_encode(["result" => $result]);
        } catch (Exception $e) {
            echo $e;
        }
    }
}
