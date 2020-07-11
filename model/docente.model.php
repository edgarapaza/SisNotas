<?php
require("Conexion.php");
class Docente
{
  private $conn;

  function __construct(){
    $conection = new Conexion();
    $this->conn = $conection->Conectar();
    return $this->conn;
  }

}