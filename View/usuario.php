<?php
include("header.php");
require_once("../model/newalumno.model.php");

$alumno = new Alumno();
$data = $alumno->ListadoAlumnos();

?>

  <style>
    .warning{
      background-color: yellow;
      color: white;
    }
  </style>

  <script type="text/javascript">

    $(document).ready(function(){
      var btnGuardar = document.getElementById("btnGuardar");
      var pass1 = document.getElementById("pass1");
      var pass2 = document.getElementById("pass2");

      $("#list-tab").click(function (){
        location.reload();
      });

      $("#btnGuardar").click(function (event){
        event.preventDefault();

        if(pass1.value == pass2.value){

          $.ajax({
            type: 'POST',
            url: '../Controller/newalumno.controller.php',
            data: $("#frmAlumno").serialize(),
            success: function(data){
              btnGuardar.innerText = "Dato Guardado";
              btnGuardar.disabled = true;
              $("#mensaje").html(data);
            },
            error: function(){
              alert("Error al Ingresar los datos del alumno.  Consulte al administrador del Sistema");
            }
          });
        }else{
          alert("Las constraseñas no son iguales");
          pass1.classList.add("warning");
          pass2.classList.add("warning");
        }

      });

    });
  </script>


    <div class="container">
      <div class="mx-auto col-sm-12 main-section" id="myTab" role="tablist">

        <ul class="nav nav-tabs justify-content-end">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="list-tab"
              data-toggle="tab"
              href="#list"
              role="tab"
              aria-controls="list"
              aria-selected="false"
              >Lista de Estudiantes</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="form-tab"
              data-toggle="tab"
              href="#form"
              role="tab"
              aria-controls="form"
              aria-selected="true"
              >Formulario</a
            >
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div
            class="tab-pane fade show active"
            id="list"
            role="tabpanel"
            aria-labelledby="list-tab"
          >
            <div class="card">
              <div class="card-header">
                <h4>Lista</h4>
              </div>
              <div class="card-body">
                <!-- Lista de usuarios-->
                <div class="table-responsive">

                <table
                    id="userList1"
                    class="table table-bordered table-hover table-striped"
                  >
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">A_Paterno</th>
                        <th scope="col">A_Materno</th>
                        <th scope="col">E-mail</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $i = 1;
                      while ($fila = $data->fetch_array(MYSQLI_ASSOC)):
                        //echo $fila['idstudent'];

                      ?>
                      <tr>
                        <th scope="row"><?php echo $i;?></th>
                        <td><?php echo $fila['alu_nombre'];?></td>
                        <td><?php echo $fila['alu_paterno'];?></td>
                        <td><?php echo $fila['alu_materno'];?></td>
                        <td><?php echo $fila['alu_email'];?></td>
                        <td>
                          <a href="#"><i class="fas fa-edit"></i></a> |
                          <a href="#"><i class="fas fa-user-times"></i></a>
                        </td>
                      </tr>
                      <?php $i++; endwhile;?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="form"
            role="tabpanel"
            aria-labelledby="form-tab"
          >
            <div class="card">
              <div class="card-header">
                <h4>Información del Usuario</h4>
              </div>
              <div class="card-body">
                <!--
                ++++++++++++++++++++++++++++++
                    Formulario de usuarios
                ++++++++++++++++++++++++++++++
            -->
                <form class="form" role="form" autocomplete="off" id="frmAlumno" method="post" action="">
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"
                      >Nombre</label
                    >
                    <div class="col-lg-9">
                      <input class="form-control" type="text" name="nombre" required="required" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"
                      >Apellido Paterno</label
                    >
                    <div class="col-lg-9">
                      <input
                        class="form-control"
                        type="text"
                        name="paterno"
                        id="paterno"
                        required="required"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"
                      >Apellido Materno</label
                    >
                    <div class="col-lg-9">
                      <input
                        class="form-control"
                        type="text"
                        name="materno"
                        id="materno"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"
                      >Email</label
                    >
                    <div class="col-lg-9">
                      <input
                        class="form-control"
                        type="email"
                        name="email"
                        id="email"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">
                      Nombre del Usuario</label
                    >
                    <div class="col-lg-9">
                      <input
                        class="form-control"
                        type="text"
                        name="nomusuario"
                        id="nomusuario"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"
                      >Contraseña</label
                    >
                    <div class="col-lg-9">
                      <input
                        class="form-control"
                        type="password"
                        name="pass1"
                        id="pass1"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"
                      >Confirmar contraseña</label
                    >
                    <div class="col-lg-9">
                      <input
                        class="form-control"
                        type="password"
                        name="pass2"
                        id="pass2"
                      />
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-lg-12 text-center">
                      <input
                        type="reset"
                        class="btn btn-secondary"
                        value="Cancelar"
                      />
                      <button type="submit" id="btnGuardar" class="btn btn-success">Guardar</button>
                    </div>
                  </div>
                </form>

                <div id="mensaje" class="alert alert-success"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

