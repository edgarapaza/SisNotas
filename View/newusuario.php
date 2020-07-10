<?php
include("header.php");
?>
  <script type="text/javascript">
    const btn = document.querySelector("#btn");

    btn.addEventListener("click", function () {
      $("#frmAlumno").bind("submit", function () {
        // Capturamnos el boton de envío

        $.ajax({
          type: "post",
          url: "../Controller/newalumno.controller.php",
          data: $("#frmAlumno").serialize(),
          beforeSend: function () {
            /*
              * Esta función se ejecuta durante el envió de la petición al
              * servidor.
              * */
            // btn.text("Enviando"); Para button
            btn.innerHTML = "Procesando";
            btn.setAttribute("disabled", "disabled");
          },
          complete: function (data) {
            /*
              * Se ejecuta al termino de la petición
              * */
            btn.innerHTML = "Enviar formulario";
            btn.removeAttribute("disabled");
          },
          success: function (data) {
            /*
              * Se ejecuta cuando termina la petición y esta ha sido
              * correcta
              * */
            $("#respuesta").html(data);
          },
          error: function (data) {
            /*
              * Se ejecuta si la peticón ha sido erronea
              * */
            alert("Problemas al tratar de enviar el formulario");
          },
        });
        // Nos permite cancelar el envio del formulario
        return false;
      });
    });
  </script>

  <div class="container">
      <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
        <div id="mensaje"></div>

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
                      <tr>
                        <th scope="row">1</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                          <a href="#"><i class="fas fa-edit"></i></a> |
                          <a href="#"><i class="fas fa-user-times"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td>
                          <a href="#"><i class="fas fa-edit"></i></a> |
                          <a href="#"><i class="fas fa-user-times"></i></a>
                        </td>
                      </tr>
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
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>


    <form class="form" role="form" autocomplete="off" id="frmAlumno" method="post" action="">
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
        <div class="col-lg-9">
          <input class="form-control" type="text" name="nombre" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"
          >Apellido Paterno</label
        >
        <div class="col-lg-9">
          <input class="form-control" type="text" name="paterno" id="paterno" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"
          >Apellido Materno</label
        >
        <div class="col-lg-9">
          <input class="form-control" type="text" name="materno" id="materno" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label">Email</label>
        <div class="col-lg-9">
          <input class="form-control" type="email" name="email" id="email" />
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
          <input class="form-control" type="password" name="pass" id="pass" />
        </div>
      </div>
      <div class="form-group row">
        <label class="col-lg-3 col-form-label form-control-label"
          >Confirmar contraseña</label
        >
        <div class="col-lg-9">
          <input class="form-control" type="password" name="pass1" id="pass1" />
        </div>
      </div>

      <button type="submit" id="btn" class="btn btn-primary">
        Guardar
      </button>
    </form>

    <div id="respuesta"></div>


