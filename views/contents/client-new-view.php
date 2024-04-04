<div class="full-box page-header">
    <h3 class="text-left verde">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE
    </h3>
    <p class="text-justify">
        Formulario para agregar un nuevo Cliente
    </p>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="active" href="client-new.html"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
        </li>
        <li>
            <a href="client-list.html"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES</a>
        </li>
        <li>
            <a href="client-search.html"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR CLIENTE</a>
        </li>
    </ul>
</div>
<!-- Content here-->
<div class="container-fluid">
    <form class="form-neon FormularioAjax" action="<?php echo SERVERURL ?>ajax/userAjax.php" method="post" data-form="guardar" autocomplete="off">
        <fieldset>
            <legend class="verde"><i class="fas fa-user"></i > &nbsp; Información del Cliente</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="clienteNomReg" class="bmd-label-floating">Nombre</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="clienteNom" id="clienteNom" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="clienteApePatReg" class="bmd-label-floating">Apellido Paterno</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="clienteApePat" id="clienteApePat" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="clienteApeMatReg" class="bmd-label-floating">Apellido Materno</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="clienteApeMat" id="clienteApeMat" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="clienteTelReg" class="bmd-label-floating">Teléfono</label>
                            <input type="tel" pattern="[0-9()+]{8,20}" class="form-control" name="clienteTel" id="clienteTel" maxlength="20">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="clienteEmailReg" class="bmd-label-floating">E-Mail</label>
                            <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}" class="form-control" name="clienteMail" id="clienteMail" maxlength="80">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="userNameReg" class="bmd-label-floating">Nombre Usuario</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ_- ]{1,40}" class="form-control" name="userName" id="userName" maxlength="80">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <legend class="verde"><i class="fas fa-user"></i > &nbsp; Direccion del Cliente</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="calleDirReg" class="bmd-label-floating">Calle</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="calleDir" id="calleDir" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="numberDirReg" class="bmd-label-floating">Numero</label>
                            <input type="number" pattern="[0-9]{1,10}" class="form-control" name="numberDir" id="numberDir" maxlength="10">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="postalCodeReg" class="bmd-label-floating">Codigo Postal</label>
                            <input type="number" pattern="[0-9]{5}" class="form-control" name="postalCode" id="postalCode" maxlength="5">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="coloniaDirReg" class="bmd-label-floating">Colonia</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="coloniaDir" id="coloniaDir" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="municipioDirReg" class="bmd-label-floating">Municipio</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="municipioDir" id="municipioDir" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="estadoDirReg" class="bmd-label-floating">Estado</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="estadoDir" id="estadoDir" maxlength="40">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
    </form>
</div>

<div class="modal fade" id="userName" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Usuario Existente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>El nombre de usuario ya está en uso. Por favor, elige otro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#userName').blur(function() {
            var userName = $(this).val();
            $.ajax({
                url: 'client-new-view.php',
                method: 'POST',
                data: { userName: userName },
                success: function(response) {
                    if (response === true) {
                        // El usuario ya existe, mostrar una ventana modal o mensaje indicando esto
                        $('#myModal').modal('show');
                    }
                }
            });
        });
    });
</script>


