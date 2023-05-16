<?php
  require_once("./configuration/connect.php");

  class EmployeeModel extends Connect{
    private $table;

    function __construct() {
      parent::__construct(); // Acessa o construtor de connect.php
      $this->table = "employee";
    }

    function createTableIfNotExists() {
      $sql = "CREATE TABLE IF NOT EXISTS `$this->table` (
        `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(100) NOT NULL,
        `city` VARCHAR(100) NOT NULL,
        `salary` DECIMAL(7,2) NOT NULL
      )";
    
      try {
        $this->connection->query($sql);
        // echo "A tabela foi criada com sucesso.";
      } catch (Throwable $th) {
        throw $th;
      }
    }

    function getEmployeeAll(){
      $query = "SELECT * FROM $this->table;";

      try {
        $sqlSelect = $this->connection->query($query);
        $resultQuery = $sqlSelect->fetchAll();
      } catch (Throwable $th) {
        throw $th;
      }
      
      return $resultQuery;
    }

    function newEmployee($name, $city, $salary){
      $sql = "INSERT INTO `$this->table` (`name`, `city`, `salary`) VALUES ('$name', '$city', '$salary');";
  
      try {
        $this->connection->query($sql);
      } catch (Throwable $th) {
        throw $th;
      }
    }

    function deleteEmployee($id){
      $query = "SELECT `id` FROM $this->table WHERE `id` = $id;";
  
      try {
        $sqlSelect = $this->connection->query($query);
        $resultQuery = $sqlSelect->fetch();
      } catch (Throwable $th) {
        throw $th;
      }

      if( !empty($resultQuery) ){
        $query = "DELETE FROM $this->table WHERE `id` = $id;";
        try {
          $resultQuery = $this->connection->query($query);
        } catch (Throwable $th) {
          throw $th;
        }
      }

      return $resultQuery;
    }

    function updateEmployeeById($id, $name, $city, $salary){
      $sql = "UPDATE `$this->table` SET `name` = '$name', `city` = '$city', `salary` = '$salary' WHERE `id` = '$id';";

      try {
        $resultQuery = $this->connection->query($sql);
      } catch (Throwable $th) {
        throw $th;
      }
      return $resultQuery;
    }
  }
?>