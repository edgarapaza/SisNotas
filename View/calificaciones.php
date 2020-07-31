<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calificaciones</title>
    <link rel="icon" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="css/calificaciones.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">
</head>
<body>
    <div class="container">
        <h1 class="calificaciones">Calificaciones de los estudiantes del I.S.P.P </h1>
    </div>

    <div class="container1">
        <div class="row">
             <div class="col-6">
                 <form action="">
                    <div class="form-group row">
                       <label for="" class="col-4 col-form-label">Perido electivo:</label>
                        <select class="form-control col-8" name="perido" id="perido" >
                            <option selected>Escoger...</option>
                            <option value="1">2019</option>
                            <option value="2">2020</option>
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
                            <option value="1">Educación Inicial</option>
                            <option value="2">Educación Primaria</option>
                            <option value="3">Educ. Sec. Comunicación</option>
                            <option value="3">Educ. Sec. Ciencias Sociales</option>
                            <option value="3">Educ. Sec. CTA</option>
                            <option value="3">Educ. Sec. Matemática</option>
                            <option value="4">Computación e Informático</option>
                            <option value="5">Educación Física</option>
                        </select>
                     </div>
                     <div class="form-group row">
                           <label for="" class="col-4 col-form-label">Docente:</label>
                           <select class="form-control col-8" name="caes" id="caes" >
                              <option selected>Escoger...</option>
                              <option value="1">APAZA PINTO, Hernán Rolando</option>
                              <option value="2">AYLLÓN GEMIO, Victor Orlando </option>
                              <option value="3"> CARPIO MIRANDA, Nilda Marcela</option>
                              <option value="3">MONTALVO GUTIERREZ, Eleazar Rafael 	</option>
                              <option value="4">PAZO PRIETO, María Elena</option>
                              <option value="5"> QUISPE APAZA, Luis</option>
                              <option value="6">RAMOS ROJAS, María Nelly</option>
                              <option value="7">ROJAS GORDILLO, Mirian María</option>
                              <option value="8">ARDILES CATACORA, Marco Antonio</option>
                              <option value="9">CASTILLO CÁCERES, Beltrán Erasmo</option>
                              <option value="10">DELGADO RAMOS, Ricardo</option>
                              <option value="11">PARICAHUA MAMANI, Vilma Rosaura</option>
                              <option value="12">PINEDA MACEDO, Eliana Honoria</option>
                              <option value="13">RAMIREZ RAMIREZ, Dominga Vianney </option>
                              <option value="14">RAMOS ORTEGA, Roger Marco </option>
                              <option value="15">VILCAPAZA CCUNO, Jesús</option>
                              <option value="16">AROHUANCA QUISPE, Wilmer Andrés 	  </option>
                              <option value="17">CHOQUE MAMANI, Seyli Niesleyni</option>
                              <option value="18">MAMANI MARON, Beatríz Vilma</option>
                              <option value="19">MANSILLA PARI, Juan José </option>
                              <option value="20">OLIVERA CHURA, Javier David</option>
                              <option value="21">PEREZ VALLE, Giuliana Claudia</option>
                              <option value="22">TURPO AROQUIPA, Einar</option>
                              <option value="23">CAZORLA AGUIRRE, Miriam Milagros</option>
                              <option value="24">FLORES QUISPE, judith Gabriela</option>
                              <option value="25">MAMANI PARI, German</option>
                              <option value="26">OLIVERA CONDORI, Erika</option>
                              <option value="27"> PARI YANA, Yeni </option>
                              <option value="28">ROJAS MAYTA, Celestina </option>
                              <option value="29">VALVERDE HERRERA, Elizabeth Jesús</option>
                           </select>
                           </div>





        

                     <div class="form-group row">
                        <label for="" class="col-4 col-form-label">Semestre:</label>
                        <select class="form-control col-8" name="caes" id="caes" >
                            <option selected>Escoger...</option>
                            <option value="1">I</option>
                            <option value="2">II</option>
                            <option value="3">III</option>
                            <option value="3">IV</option>
                            <option value="4">V</option>
                            <option value="5">VI</option>
                            <option value="6">VII</option>
                            <option value="7">VIII</option>
                            <option value="8">IX</option>
                            <option value="9">X</option>
                        </select>
                     </div>
             </div>

             

             <div class="botones text-center col-12">
                        <button class="btn btn-primary" type="submit" value="Input">Nuevo</button>
                        <button class="btn btn-success" type="submit" value="Input">Editar</button>
                        <button class="btn btn-warning" type="submit" value="Input">Guardar</button>
                        <button class="btn btn-danger" type="reset" value="Rest">Eliminar</button>
                        <button class="btn btn-info" type="reset" value="Input">Guardar</button>
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