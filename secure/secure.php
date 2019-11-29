<?php
session_start();
require_once "../ModuloIngreso/core/Conexion.php";

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
        $sql = "SELECT idpersonal, state_usu, niv_usu FROM catalogo.login WHERE username = '$usuario' AND passwd = MD5('$password');";
        $data = $this->conn->query($sql);
        $numResult = $data->num_rows;
        $fila = $data->fetch_array();
        
        if($numResult > 0){
            #echo "Dato: ".$fila[0];
            $_SESSION['personal'] = $fila[0];
            header("Location: ../ModuloIngreso/index.php");
        }else{
            #echo "Datos incorrectos";
            header("Location: ../index.html");
        }
        
        $this->linkclass->CerrarConexion();
        
    }
}

$usuario = $_POST['usuario'];
$passwd = $_POST['passwd'];
$log = new LoginApp();
$log->ValidUser($usuario, $passwd);