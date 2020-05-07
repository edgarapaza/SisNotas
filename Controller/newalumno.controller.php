<?php
require("../model/newalumno.model.php");
$alumno = new Alumno();

$nombre     = $_POST['nombre'];
$paterno    = $_POST['paterno'];
$materno    = $_POST['materno'];
$email      = $_POST['email'];
$nomusuario = $_POST['nomusuario'];
$pass1      = $_POST['pass1'];


if(!empty($nombre) && !empty($paterno) && !empty($materno) && !empty($nomusuario) && !empty($pass1))
{
  $alumno->NewAlumno($nombre,$paterno,$materno,$email,$nomusuario,$pass1);
  echo "Alumno guardado";

}else{
  echo "Faltan llenar algunos campos.";
}
