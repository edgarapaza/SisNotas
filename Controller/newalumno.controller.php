<?php
require("../model/newalumno.model.php");
$alumno = new Alumno();

$nombre     = trim(strtoupper($_POST['nombre']));
$paterno    = trim(strtoupper($_POST['paterno']));
$materno    = trim(strtoupper($_POST['materno']));
$email      = trim(strtolower($_POST['email']));
$nomusuario = trim(strtolower($_POST['nomusuario']));
$pass1      = trim(strtolower($_POST['pass1']));


if(!empty($nombre) && !empty($paterno) && !empty($materno) && !empty($nomusuario) && !empty($pass1))
{
  $alumno->NewAlumno($nombre,$paterno,$materno,$email,$nomusuario,$pass1);
  echo "Alumno guardado";

}else{
  echo "Faltan llenar algunos campos.";
}
