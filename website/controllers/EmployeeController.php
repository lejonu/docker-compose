<?php
  require_once("./models/Employee.php");

  class EmployeeController{
    private $model;

    function __construct(){
      $this->model = new EmployeeModel();
    }

    function createTableIfNotExists() {
      $this->model->createTableIfNotExists();
    }

    function getEmployeeAll(){
      $resultData = $this->model->getEmployeeAll();

      require_once("./views/index.php");
    }

    function createEmployee(){
      require_once("./views/createEmployee.php");
    }

    function newEmployee($name, $city, $salary){
      if($name && $city && $salary){
        $resultData = $this->model->newEmployee($name, $city, $salary);
      }
      header("Location: ./");
    }

    function deleteEmployee($id) {
      $resultData = $this->model->deleteEmployee($id);
      header("Location: ./");
    }

    function updateEmployee($id, $name, $city){
      require_once("./views/updateEmployee.php");
    }

    function updateEmployeeById($id, $name, $city, $salary){
      if(!empty($id)){
        $resultData = $this->model->updateEmployeeById($id, $name, $city, $salary);
      }
      header("Location: ./");
    }

  }

?>