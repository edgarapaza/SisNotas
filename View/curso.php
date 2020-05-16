<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso</title>
    <link rel="icon" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="css/curso.css">
    <link rel="stylesheet" href="css/curso_gris.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">
</head>
<body>
    <div class="container">
        <div class="form-group">
            <label for="id">ID DEL USUARIO :</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="ID">
        </div>
        <div class="form-group>
            <label for="curso"> CURSO :</label>
            <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso">
        </div>
        <div class="form-group">
            <label for="nivel">NIVEL :</label>
            <select id="nivel" class="form-control" name="nivel" placeholder:"Nivel">
            <option selected>Escoger...</option>
            <option selected>Superior</option>
        </select>
        </div>
    <!-- Botones -->
    <div class="botones text-center">
        <button class="btn btn-primary" type="submit" value="Input">Nuevo</button><br>
        <button class="btn btn-success" type="submit" value="Input">Editar</button><br>
        <button class="btn btn-warning" type="submit" value="Input">Guardar</button><br>
        <button class="btn btn-danger" type="reset" value="Rest">Eliminar</button><br>
        <button class="btn btn-info" type="reset" value="Input">Guardar</button>
    </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Nombre del Estudiante</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Semestre</th>
                </tr>
                <tbody>
                <tr>
                <th scope="row">1</th>
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
                </tr>
                <tr>
                <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            </thead>
        </table>
    <div>
        <button class="btn btn-primary">Actualizar datos</button>
    </div>
    </div>
    

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>


</body>
</html>