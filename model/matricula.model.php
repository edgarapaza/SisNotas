<?php
require("Conexion.php");

class Matricula
{
  private $con;

  function __construct(){
    $conexion = new Conexion();
    $this->con = $conexion->Conectar();
    return $this->con;
  }

  public function GuardarMatricula($idalumno,$carrera,$semestre,$docente,$fecmatricula,$iddocente){

    $fecCreate = date('Y-m-d H:i:s');
    $sql = "INSERT INTO matricula VALUES (null,'$idalumno','$carrera','$semestre','$docente','$fecmatricula','$fecCreate','$iddocente');";

    if(!$this->con->query($sql)){
      echo "Error:"  . mysqli_error($this->con);
    }
    mysqli_close($this->con);
  }

}