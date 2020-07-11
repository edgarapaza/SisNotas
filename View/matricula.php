<?php
include_once("header.php");
require_once("../model/buscar.model.php");

$docente = new Buscar();
$datosd = $docente->ListaDocente();


@$idalumno = $_REQUEST['codestudiante'];

if(empty($idalumno)){
    echo "ningun valor";
    $buscar = new Buscar();
    $dat_matriculas = $buscar->ShowMatriculados();
}else{
    $buscar = new Buscar();
    $data = $buscar->BuscarAlumno($idalumno);
}

$dat_matriculas = $buscar->ShowMatriculados();
//idalumno,carrera,semestre,docente,fecmatricula


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matricula</title>
    <link rel="icon" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="css/matricula.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">

    <style>
        .advertencia{
            background-color: rgb(93.7%, 95.2%, 64.7%);
        }
    </style>

    <script type="text/javascript">

    function ShowSelected(){
        var cod = document.getElementById("iddocente").value;
        var nombreDocente = document.getElementById("docente");
        /* Para obtener el texto */
        var combo = document.getElementById("iddocente");
        var selected = combo.options[combo.selectedIndex].text;
        nombreDocente.value = selected;

    }

    $(document).ready(function(){
        $("#botonBuscar").click(function(){
            var buscar = document.getElementById("botonBuscar");
            var codigo = document.getElementById("codestudiante")

            if(codigo.value == ""){
                $("#respuesta").html="Vacio";
                codigo.classList.add("advertencia")

            }else{
                console.log(codigo.value);
                codigo.classList.remove("advertencia")

            }
        });
    });

    </script>
</head>
<body>

  <h1 class="matricula">Registrar Matricula</h1>

  <div class="container">
    <h2>Datos Personales</h2>
    <div class="row">
          <div class="col-12">
            <form action="">
                <div class="form-group row">
                      <label for="" class="col-4 col-form-label">Codigo del estudiante:</label>
                      <input type="number" name="codestudiante" id="codestudiante" placeholder="Codigo del estudiante" class="form-control col-3">
                      <button type="submit" name="botonBuscar" id="botonBuscar" class="btn btn-primary">Buscar</button>

                  </div>
                  <div class="form-group row">
                      <?php
                      if($data == null){
                      ?>

                          <label for="" class="col-4 col-form-label">Nombre del Alumno(a):</label>
                          <input type="text" value="Ningun resultado" class="form-control col-5"/>

                      <?php

                      }else{
                      ?>
                          <label for="" class="col-4 col-form-label">Nombre del Alumno(a):</label>
                          <input type="text" value="<?php echo $data['alumno']; ?>" class="form-control col-5"/><br/>

                      <?php
                      }
                      ?>
                  </div>
            </form>

            <form action="../Controller/matricula.controller.php" method="post" id="frmMatricula">
                  <div class="form-group row">
                      <input type="hidden" name="idalumno" value="<?php echo $idalumno; ?>">
                  </div>

                  <div class="form-group row">

                      <label for="" class="col-4 col-form-label">Carrera/Especialidad:</label>

                      <select class="form-control col-4" name="carrera" id="carrera" >
                          <option selected>Escoger...</option>
                          <option value="Educación Inicial">Educación Inicial</option>
                          <option value="Educación Primaria">Educación Primaria</option>
                          <option value="Educ. Sec. Comunicación">Educ. Sec. Comunicación</option>
                          <option value="Educ. Sec. Ciencias Sociales">Educ. Sec. Ciencias Sociales</option>
                          <option value="Educ. Sec. CTA">Educ. Sec. CTA</option>
                          <option value="Educ. Sec. Matemática">Educ. Sec. Matemática</option>
                          <option value="Computación e Informático">Computación e Informático</option>
                          <option value="Educación Física">Educación Física</option>
                      </select>
                  </div>
                  <div class="form-group row">
                      <label for="" class="col-4 col-form-label">Semestre:</label>
                      <select class="form-control col-2" name="semestre" id="semestre" >
                          <option selected>Escoger...</option>
                          <option value="I">I</option>
                          <option value="II">II</option>
                          <option value="III">III</option>
                          <option value="IV">IV</option>
                          <option value="V">V</option>
                          <option value="VI">VI</option>
                          <option value="VII">VII</option>
                          <option value="VIII">VIII</option>
                          <option value="IX">IX</option>
                          <option value="X">X</option>
                      </select>
                  </div>
                  <div class="form-group row">
                      <label for="" class="col-4 col-form-label">Docente:</label>
                      <select class="form-control col-4" name="iddocente" id="iddocente" onchange="ShowSelected();" >
                          <option selected>Escoger...</option>
                          <?php
                          while ($filad = $datosd->fetch_array(MYSQLI_ASSOC)):
                          ?>

                          <option value="<?php echo $filad['iddoc'];?>">
                          <?php echo $filad['doc_apellidos']. " ". $filad['doc_nombres'];?>
                          </option>
                          <?php endwhile;?>
                          <input type="hidden" name="docente" id="docente" placeholder="Nombre de docente"/>
                      </select>
                  </div>
                  <div class="form-group row">
                      <label for="" class="col-4 col-form-label">Fecha de Matricula:</label>
                      <input type="date" name="fecmatricula" id="fmatricula" placeholder="Fecha de Matricula" class="form-control col-2">
                  </div>

                <div class="botones text-center col-12">

                    <a href="usuario.php" class="btn btn-success">Nuevo Alumno</a>

                    <button class="btn btn-warning" type="submit" id="btnGuardar">Guardar Matricula</button>
                    <!-- <button class="btn btn-danger" type="reset" id="btn">Eliminar</button> -->
                    <a href="menu.php" class="btn btn-info">Cancelar</a>
                </div>
            </form>
          </div>


          <div class="col-12">
            <table class="table table-borderless table-dark">
                <thead>
                    <tr>
                    <th scope="#"></th>
                    <th scope="col">Codigo del estudiante</th>
                    <th scope="col">Carrera del estudiante</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Docente</th>
                    <th scope="col">Fecha de Matricula</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i =1;
                    while ($fila_m = $dat_matriculas->fetch_array(MYSQLI_ASSOC)):
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $fila_m['idalumno'];?></td>
                        <td><?php echo $fila_m['carrera'];?></td>
                        <td><?php echo $fila_m['semestre'];?></td>
                        <td><?php echo $fila_m['docente'];?></td>
                        <td><?php echo $fila_m['fecmatricula'];?></td>

                    </tr>
                    <?php $i++;  endwhile;?>
                </tbody>
            </table>
          </div>
    </div>
  </div>

  <script type="">

  </script>

</body>
</html>