<?php
require("../model/matricula.model.php");

$idalumno = $_POST['idalumno'];
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];
$docente = $_POST['docente'];
$fecmatricula = $_POST['fecmatricula'];
$iddocente = $_POST['iddocente'];

$matricula = new Matricula();
$matricula->GuardarMatricula($idalumno,$carrera,$semestre,$docente,$fecmatricula,$iddocente);

header("Location: ../View/matricula.php");