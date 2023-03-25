<?php

class CRUD
{
    private $PDO;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'iran';
    public function __construct()
    {
        try {
            $this->PDO = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Connection Failed: ' . $e->getMessage());
        }
    }

    public function addProvince($name)
    {
        $query = 'INSERT INTO `provinces` (`Name`) VALUES (?);';
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$name]);
        return $stmt->rowCount();
    }

    public function addCity($cityName, $provinceID)
    {
        $query = 'INSERT INTO `cities` (`Name`,`Province`) VALUES (?,?);';
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$cityName, $provinceID]);
        return $stmt->rowCount();
    }

    public function getCities($data)
    {
        $province_id = $data['province_id'];
        $page = $data['page'];
        $page_size = $data['page_size'];
        $fields = $data['fields'];
        $orderby = $data['orderby'];
        $limit = '';
        $orderbyString = '';
        if (is_numeric($page) && is_numeric($page_size)) {
            $start = ($page - 1) * $page_size;
            $limit = " LIMIT $start,$page_size";
        }
        if (!is_null($orderby)) {
            $orderbyString = "order by $orderby";
        }
        if (is_array($fields)) {
            $fields = implode(',', $fields);
        }
        $query = "SELECT $fields FROM `cities` WHERE `Province` = :province_id $orderbyString $limit;";
        $stmt = $this->PDO->prepare($query);
        // $stmt->bindValue(':province_id', $province_id, PDO::PARAM_INT);
        $stmt->bindParam(':province_id', $province_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateProvince($id, $newName)
    {
        $query = "UPDATE `provinces` SET `Name` = ? WHERE `ID` = ?;";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$newName, $id]);
        return $stmt->rowCount();
    }

    public function updateCity($id, $newName)
    {
        $query = "UPDATE `cities` SET `Name` = ? WHERE `ID` = ?;";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$newName, $id]);
        return $stmt->rowCount();
    }

    public function deleteProvince($id)
    {
        $query = "DELETE FROM `provinces` WHERE `ID` = ?;";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }

    public function deleteCity($id)
    {
        $query = "DELETE FROM `cities` WHERE `ID` = ?;";
        $stmt = $this->PDO->prepare($query);
        $stmt->execute([$id]);
        return $stmt->rowCount();
    }

    public function __destruct()
    {
        $this->PDO = null;
    }
}

// Usage example:
// $config = require 'config.php';
// $crud = new CRUD($config['host'], $config['username'], $config['password'], $config['dbname']);
// $crud->addProvince('Lorestan');
// $crud->addCity('Khorramabad', 1);
// $cities = $crud->getCities(1);
// foreach ($cities as $city) {
//     echo $city['Name'];
// }
// $crud->updateProvince(1, 'Tehran');
// $crud->updateCity(1, 'Shiraz');
// $crud->deleteProvince(1);
// $crud->deleteCity(1);