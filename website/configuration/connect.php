<!-- Conexão com Banco de Dados -->
<?php

  define('HOST', 'db');
  define('DATABASENAME', 'testedb');
  define('USER', 'root');
  define('PASSWORD', 'Senha123');

  class Connect{
    protected $connection;

    function __construct(){
      $this->connectDatabase();
    }

    function connectDatabase() {
      try {
        $this->connection = new PDO("mysql:host=".HOST.";dbname=".DATABASENAME, USER, PASSWORD);
        // echo "conectado!";
      } catch(PDOException  $e) {
        echo "Error! ".$e->getMessage();
        die();
      }
    }
  }

  // $testConnection = new Connect();

?>