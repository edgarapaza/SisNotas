<?php
require("header.php");
?>
<link rel="stylesheet" href="css/menu.css">
<style>

img{
    width: 106px;
}
.contenedor{
    padding: 10px;
}
.card-title {
  text-align: center;
}
.card-container{
    /* border: 1px solid red; */
    max-width: 1224px;
    padding: 10px;
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
    grid-gap: 5px;
}

.tarjeta{
    border: 2px solid black;
    background-color:rgb(89.8%, 89.8%, 89.8%);
    height: 150px;
    width: 100%;
    display: flex;
    align-items: center;
}
.card-body{
    /* border: 1px solid green; */
    text-align: center;
}

@media screen and(min-width: 462px)
{

}

</style>

    <div class="contenedor">

        <div class="card-title" >
            <div class="">
                <h1>Pedagógico Público Puno</h1>
                <h2>Alma Mater del Magisterio Regional</h2>
            </div>
        </div>

        <div class="card-container">
            <div class="tarjeta">
                <img src="img/estudiante1.jpg" alt="">
                <div class="card-body">
                    <h5>Estudiante</h5>
                    <a href="usuario.php" class="btn btn-primary btn-lg" role="button">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/matricula.png" alt="">
                <div class="card-body">
                    <h5>Matricula</h5>
                    <a href="matricula.php" class="btn btn-success btn-lg">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/notas.png" alt="">
                <div class="card-body">
                    <h5>Notas</h5>
                    <a href="#" class="btn btn-danger btn-lg">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/docente.jpg" alt="">
                <div class="card-body">
                    <h5>Docentes</h5>
                    <a href="#" class="btn btn-warning btn-lg">Ingresar</button></a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/horario_clases.png" alt="">
                <div class="card-body">
                    <h5>Horarios</h5>
                    <a href="#" class="btn btn-info btn-lg">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/clases.jpg" alt="">
                <div class="card-body">
                    <h5>Clases</h5>
                    <a href="#" class="btn btn-secondary btn-lg">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/cursos.png" alt="">
                <div class="card-body">
                    <h5>Cursos</h5>
                    <a href="#" class="btn btn-warning btn-lg">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/pagos.jpg" alt="">
                <div class="card-body">
                    <h5>Pagos</h5>
                    <a href="#" class="btn btn-info btn-lg">Ingresar</a>
                </div>
            </div>

            <div class="tarjeta">
                <img src="img/apoderado.png" alt="">
                <div class="card-body">
                    <h5>Datos del apoderado</h5>
                    <a href="#" class="btn btn-secondary btn-lg">Ingresar</a>
                </div>
            </div>

        </div>

    </div>


</body>
</html>