<?php
require("../model/loginapp.model.php");
$usuario = $_POST['usuario'];
$passwd = $_POST['passwd'];

$log = new LoginApp();
$data = $log->ValidUser($usuario, $passwd);

    $numResult = $data->num_rows;
    $fila = $data->fetch_array(MYSQLI_ASSOC);

    if($numResult > 0){
        if($fila['stateuser'] == 1){
            switch ($fila['nivel']) {
                case 1: //Administrador
                    $_SESSION['administrador'] = $fila['idpersonal'];
                    header("Location: ../admin/index.html");

                    break;
                case 2: //Personal
                    $_SESSION['personal'] = $fila['idpersonal'];
                    header("Location: ../View/index.html");
                    break;
                default:
                    header("Location: ../index.html");
                    break;
            }

        }else{
            echo "El usuario no esta activo";
        }
    }else{
        #echo "Datos incorrectos";
        header("Location: ../index.html");
    }


