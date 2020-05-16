<?php
require("Conexion.php");

class Alumno
{
  private $conn;

  function __construct(){
    $conexion = new Conexion();
    $this->conn = $conexion->Conectar();
    return $this->conn;
  }

  public function NewAlumno($nombre,$paterno,$materno,$email,$usuario,$pass)
  {
    $sql = "INSERT INTO estudiante (alu_nombre,alu_paterno,alu_materno,alu_email,alu_usuario,alu_pass,fecCreate)
        VALUES ('$nombre','$paterno','$materno','$email','$usuario','$pass',now());";

    if(!$this->conn->query($sql)){
      echo "Error: " . mysqli_error($this->conn);
    }
    mysqli_close($this->conn);
  }

  public function ListadoAlumnos()
  {
    $sql = "SELECT * FROM estudiante";

    if(!$response = $this->conn->query($sql)){
      echo "Error: " . mysqli_error($this->conn);
    }

    mysqli_close($this->conn);
    return $response;
  }
}
