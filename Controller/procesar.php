<?php
    $nombre = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $direccion = $_POST['direccion'];
    $dni = $_POST['dni'];
    $sexo = $_POST['sexo'];
    $usuario = $_POST['usuario'];

    echo "Recibimos .... <br>";
    echo "Nombre:   ".$nombre."<br>";
    echo "Apellido Paterno: ".$apellido_paterno."<br>";
    echo "Apellido Materno: ".$apellido_materno."<br>";
    echo "Dirección:  ".$direccion."<br>";
    echo "Sexo:   ".$sexo."<br>";
    echo "Nombre del usuario:   ".$usuario."<br>";
?>