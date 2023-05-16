<?php

  ini_set("display_errors", 1);

  require_once "./controllers/EmployeeController.php";

  $controller = new EmployeeController();
  $controller->createTableIfNotExists();

  $action = !empty($_GET['a']) ? $_GET['a'] : 'getEmployeeAll';
  $id = !empty($_GET['id']) ? $_GET['id'] : null;

  $name = !empty($_GET['name']) ? $_GET['name'] : null;
  $city = !empty($_GET['city']) ? $_GET['city'] : null;
  $salary = !empty($_GET['salary']) ? $_GET['salary'] : null;

  switch ($action) {
    case "newEmployee":
      $controller->{$action}($name, $city, $salary);
      break;    
    case "deleteEmployee":
      $controller->{$action}($id);
      break;
    case "updateEmployee":
      $controller->{$action}($id, $name, $city, $salary);
      break;    
    case "updateEmployeeById":
      $controller->{$action}($id, $name, $city, $salary);
      break;
    default:
      $controller->{$action}();
  }

?>

 