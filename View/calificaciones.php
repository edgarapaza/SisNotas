<?php
include("header.php");
require_once("../model/notasListados.model.php");

$notaslistado = new NotasListados();
$periodo = $notaslistado->Periodo();
$nivel = $notaslistado->Nivel();
$carrera = $notaslistado->Carrera();
$docente = $notaslistado->Docente();
$semestre = $notaslistado->Semestre();

// echo $nivel['Primaria'];
// echo $nivel['Secundaria'];
// echo $nivel['Inicial'];
// echo $nivel['CTA'];
?>
<body>

    <div class="container">
        <div class="row">
            <h1 class="calificaciones">Calificaciones de los estudiantes del I.S.P.P </h1>
        </div>
        <div class="row">
             <div class="col-6">
                 <form action="">
                    <div class="form-group row">
                       <label for="" class="col-4 col-form-label">Perido electivo:</label>
                        <select class="form-control col-8" name="perido" id="perido" >
                            <option selected>Escoger...</option>
                            <?php
                            while ($data_periodo = $periodo->fetch_array(MYSQLI_ASSOC)) :
                            ?>
                            <option value="<?php echo $data_periodo['idperiodo'];?>"><?php echo $data_periodo['periodo'];?></option>
                            <?php endwhile;?>
                        </select>
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-4 col-form-label">Nivel:</label>
                        <input type="text" name="nivel" id="Nivel" placeholder="Nivel" class="form-control col-8">
                     </div>
                      <div class="form-group row">
                        <label for="" class="col-4 col-form-label">Carrera/Especialidad:</label>
                        <select class="form-control col-8" name="caes" id="caes" >
                            <option selected>Escoger...</option>
                            <?php
                            while ($data_carrera = $carrera->fetch_array(MYSQLI_ASSOC)) :
                            ?>
                            <option value="<?php echo $data_carrera['idcarrera'];?>"><?php echo $data_carrera['carrera'];?></option>
                            <?php endwhile;?>
                        </select>
                     </div>
                     <div class="form-group row">
                           <label for="" class="col-4 col-form-label">Docente:</label>
                           <select class="form-control col-8" name="caes" id="caes" >
                              <option selected>Escoger...</option>
                              <?php
                                while ($data_docente = $docente->fetch_array(MYSQLI_ASSOC)) :
                              ?>
                                <option value="<?php echo $data_docente['iddoc'];?>"><?php echo $data_docente['profesor'];?></option>
                                <?php endwhile;?>

                           </select>
                           </div>


                     <div class="form-group row">
                        <label for="" class="col-4 col-form-label">Semestre:</label>
                        <select class="form-control col-8" name="caes" id="caes" >
                            <option selected>Escoger...</option>
                            <?php
                                while ($data_semestre = $semestre->fetch_array(MYSQLI_ASSOC)) :
                              ?>
                                <option value="<?php echo $data_semestre['idsemestre'];?>"><?php echo $data_semestre['semestre'];?></option>
                                <?php endwhile;?>
                        </select>
                     </div>
             </div>

             <div class="botones text-center col-12">
                        <button class="btn btn-primary" type="submit" value="Input">Buscar</button>
                        <button class="btn btn-success" type="submit" value="Input">Exportar</button>

            </div>

             <div class="col-6">
                 <table class="table table-borderless table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">N1</th>
                                    <th scope="col">N2</th>
                                    <th scope="col">N3</th>
                                    <th scope="col">N4</th>
                                    <td>N5</td>
                                    <td>N6</td>
                                    <td>N7</td>
                                    <td>N8</td>
                                    <td>N9</td>
                                    <td>N10</td>
                                    <td>N11</td>
                                    <td>N12</td>
                                    <th scope="col">Promedio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

             </div>

         </div>

    </div>


    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</body>
</html>