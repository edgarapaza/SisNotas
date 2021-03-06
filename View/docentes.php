<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docentes</title>
     <link rel="icon" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="css/docente.css">
    <link rel="stylesheet" href="css/docente_grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">
</head>
<body>

    <h1 class="docente">Registar Docente</h1>


    <div class="container">
        <h2>Datos Generales</h2>
         <div class="row">
             <div class="col-6">
                 <form action="">
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">ID:</label>
                        <input type="text" name="id" id="id" placeholder="ID del docente" class="form-control col-9">
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Nombres:</label>
                        <input type="text" name="ndocente" id="docente" placeholder="Nombre del docente" class="form-control col-9">
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Apellidos:</label>
                        <input type="text" name="adocente" id="adocente" placeholder="Apellidos del docente" class="form-control col-9">
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">DNI:</label>
                        <input type="text" name="dni" id="dni" placeholder="DNI" class="form-control col-9">
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Telefono:</label>
                        <input type="text" name="telefono" id="telefono" placeholder="Telefono" class="form-control col-9">
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Especialidad:</label>
                        <input type="text" name="especialidad" id="especialidad" placeholder="Especialidad" class="form-control col-9">
                     </div>
                     <div class="form-group row">
                       <label for="" class="col-3 col-form-label">Sexo:</label>
                        <select class="form-control col-9" name="sexo" id="sexo" >
                            <option selected>Escoger...</option>
                            <option value="1">Femenino</option>
                            <option value="2">Masculino</option>
                        </select>
                     </div>
             </div>

              <div class="col-6">
                 <form action="">
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Departamento:</label>
                        <select class="form-control col-9" name="departamento" id="departamento" >
                            <option selected>Escoger...</option>
                            <option value="1">Puno</option>
                            <option value="2">Julica</option>
                        </select>
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Provincia:</label>
                        <select class="form-control col-9" name="provincia" id="provincia" >
                            <option selected>Escoger...</option>
                            <option value="1">Puno</option>
                            <option value="2">Julica</option>
                        </select>
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Distrito:</label>
                        <select class="form-control col-9" name="distrito" id="distrito" >
                            <option selected>Escoger...</option>
                            <option value="1">Puno</option>
                            <option value="2">Julica</option>
                        </select>
                     </div>
                     <div class="form-group row">
                        <label for="" class="col-3 col-form-label">Dirección:</label>
                        <input type="text" name="direccion" id="direccion" placeholder="Dirección" class="form-control col-9">
                     </div>
             </div>

             <div class="botones text-center col-12">
                        <button class="btn btn-primary" type="submit" value="Input">Nuevo</button>
                        <button class="btn btn-success" type="submit" value="Input">Editar</button>
                        <button class="btn btn-warning" type="submit" value="Input">Guardar</button>
                        <button class="btn btn-danger" type="reset" value="Rest">Eliminar</button>
                        <button class="btn btn-info" type="reset" value="Input">Guardar</button>
            </div>

             <div class="col-12">
                        <table class="table table-borderless table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Dirección</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Especialidad</th>
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
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
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