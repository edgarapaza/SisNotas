<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asignatura</title>
     <link rel="icon" href="img/favicon-32x32.png">
    <link rel="stylesheet" href="css/asignatura.css">
    <link rel="stylesheet" href="css/asignatura_grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/solid.css">
</head>
<body>
     <div class="container">
        <div class="form-group">
            <label for="id">Nombre de la asignatura :</label>
            <input type="text" class="form-control" id="asignatura" name="asignatura" placeholder="Asignatura">
        </div>
        
        <div class="form-group">
            <label for="nivel">NIVEL :</label>
            <select id="nivel" class="form-control" name="nivel" placeholder:"Nivel">
            <option selected>Escoger...</option>
            <option selected>Superior</option>
        </select>
        </div>
        <div class="form-group">
            <label for="horas">Horas Semanales :</label>
            <select id="horas" class="form-control" name="horas" placeholder="Horas Semanales">
            <option selected>Escoger...</option>
            <option selected>2 horas</option>
            <option selected>4 horas</option>
        </select>
        </div>
   
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Asignaturas de la I.S.P.P</th>
                    <th scope="col">Docente</th>
                    <th scope="col">Horas Semanales</th>
                </tr>
                <tbody>
                <tr>
                <th scope="row">1</th>
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
                    <td></td>
                </tr>
            </tbody>
            </thead>
        </table>

         <!-- Botones -->
        <div class="botones text-center">
        <button class="btn btn-primary" type="submit" value="Input">Nuevo</button><br>
        <button class="btn btn-success" type="submit" value="Input">Editar</button><br>
        <button class="btn btn-warning" type="submit" value="Input">Guardar</button><br>
        <button class="btn btn-danger" type="reset" value="Rest">Eliminar</button><br>
        <button class="btn btn-info" type="reset" value="Input">Guardar</button>
    </div>
    </div>
</body>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</html>