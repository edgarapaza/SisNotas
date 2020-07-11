<?php
require("Conexion.php");

class NotasListados
{
    private $conn;

    public function __construct()
    {
        $conexion = new Conexion();
        $this->conn = $conexion->Conectar();
        return $this->conn;
    }

    public function Periodo(){
      $sql = "SELECT * FROM periodo";

      if(!$result = $this->conn->query($sql)){
        echo "Error mostrando el periodo: " . mysqli_error($this->conn);
      }
      return $result;

      mysqli_close($this->conn);
    }

    public function Nivel(){
      $sql = "";
      $datos = array(
        'Primaria' => 'Primaria',
        'Secundaria' => 'Secundaria',
        'Inicial' => 'Inicial',
        'CTA' => 'CTA',
     );

      // if(!$result = $this->conn->query($sql)){
      //   echo "Error mostrando nivel" . mysqli_error($this->conn);
      // }
      // $datos = $result->fetch_array(MYSQLI_ASSOC);

      return $datos;

      // mysqli_close($this->conn);
    }

    public function Carrera(){
      $sql = "SELECT idcarrera, carrera FROM carrera";

      if(!$result = $this->conn->query($sql)){
        echo "Error mostrando Carrera" . mysqli_error($this->conn);
      }
      // $datos = $result->fetch_array(MYSQLI_ASSOC);

      return $result;

      mysqli_close($this->conn);
    }

    public function Docente(){
      $sql = "SELECT iddoc, concat(doc_nombres,' ', doc_apellidos) as profesor FROM docente;";

      if(!$result = $this->conn->query($sql)){
        echo "Error mostrando Docente" . mysqli_error($this->conn);
      }
      // $datos = $result->fetch_array(MYSQLI_ASSOC);

      return $result;

      mysqli_close($this->conn);
    }

    public function Semestre(){
      $sql = "SELECT * FROM semestre";

      if(!$result = $this->conn->query($sql)){
        echo "Error mostrando Semestre" . mysqli_error($this->conn);
      }
      // $datos = $result->fetch_array(MYSQLI_ASSOC);

      return $result;

      mysqli_close($this->conn);
    }
}