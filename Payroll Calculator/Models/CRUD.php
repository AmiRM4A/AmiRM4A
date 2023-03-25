<?php
class CRUD
{
    private $db;
    private $table = 'payroll';
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:dbname=test;host=localhost", 'root', '');
        } catch (PDOException $th) {
            throw new Exception('Connection Failed: ' . $th->getMessage());
        }
    }
    public function Insert(string $name, string $hourlyRate, string $hoursWorked, string | null $taxRate)
    {
        $query = "INSERT INTO `$this->table` (`Name`,`HourlyRate`,`HoursWorked`,`TaxRate`) VALUES (:name,:hrate,:hwork,:trate)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':hrate', $hourlyRate);
        $stmt->bindParam(':hwork', $hoursWorked);
        $stmt->bindParam(':trate', $taxRate);
        $stmt->execute();
    }
    public function __destruct()
    {
        $this->db = null;
    }
}