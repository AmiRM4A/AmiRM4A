<?php

class BaseModel{
    private $db;
    protected $table;
    protected $key;
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname=test;host=localhost", 'root', '');
        } catch (PDOException $th) {
            die('Connection Failed: ' .  $th->getMessage());
        }
    }
    //CRUD Methods
    public function insert($col1,$col2,$col3,$valCol1,$valCol2,$valCol3){
        $query = "INSERT INTO {$this->table} (`$col1`,`$col2`,`$col3`) VALUES ('$valCol1','$valCol2','$valCol3');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
    public function select($KeyInput){
        $query = "SELECT * FROM {$this->table} WHERE {$this->key} = :KeyInput";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':KeyInput' => $KeyInput]);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function update($col1,$col2,$col3,$valCol1,$valCol2,$valCol3){
        $query = "UPDATE {$this->table} SET `$col1` = '$valCol1,`$col2` = '$valCol2,`$col3` = '$valCol3'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
    public function delete($KeyInput){
        $query = "SELECT FROM {$this->table} WHERE {$this->key} = :KeyInput";
        $stmt = $this->db->prepare($query);
        $stmt->execute([':KeyInput' => $KeyInput]);
        return $stmt->rowCount();
    }
}