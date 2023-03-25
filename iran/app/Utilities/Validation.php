<?php

namespace app\Utilities;

use PDO;
use PDOException;

class Validation
{
    private $PDO;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'iran';
        $username = 'root';
        $password = '';
        try {
            $this->PDO = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        } catch (PDOException $e) {
            die('Connection Failed: ' . $e->getMessage());
        }
    }

    public function isValidProvince($id)
    {
        $query = 'SELECT `Name` FROM `provinces` WHERE `ID` = :id;';
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function isValidCity($id)
    {
        $query = 'SELECT `Name` FROM `cities` WHERE `ID` = :id;';
        $stmt = $this->PDO->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function __destruct()
    {
        $this->PDO = null;
    }
}