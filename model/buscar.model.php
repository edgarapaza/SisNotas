<?php
require("Conexion.php");

class Buscar
{
  private $conn;

  function __construct(){
    $conexion = new Conexion();
    $this->conn = $conexion->Conectar();
    return $this->conn;
  }

  public function BuscarAlumno($idalumno){
    if($idalumno > 0){
      $sql = "SELECT concat(alu_nombre,' ',alu_paterno,' ',alu_materno) as alumno, alu_email as email FROM estudiante WHERE idstudent = " . $idalumno;
      if(!$result = $this->conn->query($sql)){
        echo "Error1: " . mysqli_error($this->conn);
      }

      $data = $result->fetch_array(MYSQLI_ASSOC);

    }else{
      echo "Ningun resultado";

    }
    // NO se puede cerrar la conexion a la base de datos
    return $data;
  }

  public function ShowMatriculados(){
    $sql = "SELECT idmatricula,idalumno,carrera,semestre,docente,fecmatricula,iddocente FROM matricula LIMIT 20;";

    if(!$result = $this->conn->query($sql)){
      echo "Error2:"  . mysqli_error($this->conn);
    }

    // mysqli_close($this->conn);
    return $result;
  }

}