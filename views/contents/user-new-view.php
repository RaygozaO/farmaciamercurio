<div class="full-box page-header">
    <h3 class="text-left verde">
        <i class="fas fa-plus fa-fw verde"></i> &nbsp; NUEVO USUARIO
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>user-new"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>user-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>user-search"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
        </li>
    </ul>
</div>

<!-- Content -->
<div class="container-fluid">
    <form class="form-neon FormularioAjax" action="../../ajax/user_ajax.php" method="post" data-form="guardar" autocomplete="off">
        <fieldset>
            <legend class="verde"><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nom_usuario_reg" class="bmd-label-floating">Nombre de usuario</label>
                            <input type="text" pattern="[a-zA-Z0-9]{5,20}" class="form-control" name="nom_usuario_reg" id="nom_usuario_reg" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="usuario_email" class="bmd-label-floating">Email</label>
                            <input type="email" class="form-control" name="usuario_email" id="usuario_email" maxlength="50">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="pass" class="bmd-label-floating">Contraseña</label>
                            <input type="password" class="form-control" name="pass" id="pass" pattern="[a-zA-Z0-9@$.\-]{7,100}" maxlength="100" required="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="pass_2" class="bmd-label-floating">Repetir contraseña</label>
                            <input type="password" class="form-control" name="pass_2" id="pass_2" pattern="[a-zA-Z0-9$@.\-]{7,100}" maxlength="100" required="">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br><br>
        <fieldset>
            <legend class="verde"><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="usuario_nombre_reg" class="bmd-label-floating">Nombre</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="usuario_nombre_reg" id="usuario_nombre_reg" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="usuario_nombre2" class="bmd-label-floating">Segundo Nombre</label>
                            <input type="text" class="form-control" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" name="usuario_nombre2" id="usuario_nombre2" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="apellido_pat_reg" class="bmd-label-floating">Apellidos Paterno</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="apellido_pat_reg" id="apellido_pat_reg" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="apellido_mat" class="bmd-label-floating">Apellidos Materno</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,35}" class="form-control" name="apellido_mat_reg" id="apellido_mat" maxlength="35">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="usuario_telefono_reg" class="bmd-label-floating">Teléfono</label>
                            <input type="tel"  class="form-control" name="usuario_telefono_reg" id="usuario_telefono_reg" maxlength="20" value="(+52)">
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
                            <label for="calle" class="bmd-label-floating">Calle</label>
                            <input type="text" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,40}" class="form-control" name="calle" id="calle" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="numero" class="bmd-label-floating">Numero</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-.]{1,40}" class="form-control" name="numero" id="numero" maxlength="10">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="interior" class="bmd-label-floating">Interior</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-.]{1,40}" class="form-control" name="interior" id="interior" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="cp" class="bmd-label-floating">Codigo Postal</label>
                            <input type="number" pattern="[0-9]{5-5}" class="form-control" name="cp" id="cp" maxlength="5">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="colonia" class="bmd-label-floating">Colonia</label>
                            <input type="text" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}" class="form-control" name="colonia" id="colonia" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="municipio" class="bmd-label-floating">Municipio</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}" class="form-control" name="municipio" id="municipio" maxlength="40">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="estado" class="bmd-label-floating">Estado</label>
                            <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}" class="form-control" name="estado" id="estado" maxlength="40">
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <br><br>
        <fieldset>
            <legend class="verde"><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <p><span class="badge badge-info">Control total</span> Permisos para registrar, actualizar y eliminar</p>
                        <p><span class="badge badge-success">Edición</span> Permisos para registrar y actualizar</p>
                        <p><span class="badge badge-dark">Registrar</span> Solo permisos para registrar</p>
                        <div class="form-group">
                            <select class="form-control" name="usuario_privilegio_reg" disabled="">
                                <option value="" selected="" disabled="">Seleccione una opción</option>
                                <option value="1">Control total</option>
                                <option value="2">Edición</option>
                                <option value="3">Registrar</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <p class="text-center" style="margin-top: 40px;">
            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
            &nbsp; &nbsp;
            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
        </p>
    </form>
</div>
