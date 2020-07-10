<?php
include("header.php");
?>
    <h1 class="text-center">I.S.P.P</h1>
    <div class="container">
         <div class="col-6">
                <form class="form-inline">
                     <div class="form-group">
                         <label for="claveanterior" class="col-6 col-form-label">Clave Anterior: </label>
                         <input type="password" id="claveanterior" class="form-control col-6" aria-placeholder="Clave Anterior">
                         <small id="passwordinline" class="text-muted">
                             <!-- Debe tener entre 8-20 caracteres -->
                         </small>
                     </div>
                </form>

                <form class="form-inline">
                        <div class="form-group">
                            <label for="claveanterior" class="col-6 col-form-label">Clave Nueva: </label>
                            <input type="password" id="clavenueva" class="form-control col-6" aria-placeholder="Clave Nueva">
                            <small id="passwordinline" class="text-muted">
                                <!-- Debe tener entre 8-20 caracteres -->
                            </small>
                        </div>
                </form>

                <form class="form-inline">
                     <div class="form-group">
                         <label for="confimarclave" class="col-6 col-form-label">Confimar clave: </label>
                         <input type="password" id="confimarclave" class="form-control col-6 " aria-placeholder="Confimar Clave">
                         <small id="passwordinline" class="text-muted">
                             <!-- Debe tener entre 8-20 caracteres -->
                         </small>
                     </div>
                 </form>

        <div class="botones text-center col-12">
                <button class="btn btn-primary" type="submit" value="Input">Grabar</button>
                <button class="btn btn-danger" type="reset" value="Rest">Cancelar</button>

        </div>
    </div>
 </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</body>
</html>