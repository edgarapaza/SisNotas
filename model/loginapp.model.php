<?php
session_start();
require_once "Conexion.php";

class LoginApp
{
    private $linkclass;
    private $conn;

    function __construct(){

        $this->linkclass = $conection = new Conexion();
        $this->conn = $conection->Conectar();
        return $this->conn;
    }

    function ValidUser($usuario, $password)
    {
        $sql = "SELECT idlogin,idpersonal,nameuser,passuser,nivel,stateuser FROM login WHERE nameuser = '$usuario' AND passuser = MD5('$password');";
        if(!$data = $this->conn->query($sql)){
          echo "Error: " . mysqli_error($this->conn);
        }

        mysqli_close($this->conn);
        return $data;

    }
}