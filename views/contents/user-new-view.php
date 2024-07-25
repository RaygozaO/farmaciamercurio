<main class="full-box main-container">
    <!-- Page content -->
    <section class="full-box page-content">
        <nav class="full-box navbar-info">
            <a href="#" class="float-left show-nav-lateral">
                <i class="fas fa-exchange-alt"></i>
            </a>
            <a href="../../index.php">
                <i class="fas fa-user-cog"></i>
            </a>
            <a href="#" class="btn-exit-system">
                <i class="fas fa-power-off"></i>
            </a>
        </nav>
        <!-- Page header -->
        <div class="full-box page-header">
            <h3 class="text-left">
                <i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO
            </h3>
            <p class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
            </p>
        </div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                    <a class="active" href="../../index.php"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO USUARIO</a>
                </li>
                <li>
                    <a href="../../index.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS</a>
                </li>
                <li>
                    <a href="../../index.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR USUARIO</a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="container-fluid">
            <form class="form-neon formularioAjax" id="direccionForm" action="../../ajax/usuarioAjax.php" method="post" data-form="save" autocomplete="off">
                <fieldset>
                    <legend><i class="far fa-address-card"></i> &nbsp; Información personal</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="nombrecliente_reg" class="bmd-label-floating">Nombres</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,20}" class="form-control" name="nombrecliente_reg" id="nombrecliente_reg" maxlength="20" required="" >
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="appaterno_reg" class="bmd-label-floating">Apellido Paterno</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="appaterno_reg" id="appaterno_reg" maxlength="35" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="apmaterno_reg" class="bmd-label-floating">Apellido Materno</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}" class="form-control" name="apmaterno_reg" id="apmaterno_reg" maxlength="35">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="telefono_reg" class="bmd-label-floating">Teléfono</label>
                                    <input type="text" pattern="\(?\d{3}\)?[\-.\s]?\d{3}[\-.\s]?\d{4}" class="form-control" name="telefono_reg" id="telefono_reg" maxlength="10" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br><br>
                <fieldset>
                    <legend><i class="far fa-address-card"></i> &nbsp; Información Domicilio</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="calle_reg" class="bmd-label-floating">Calle</label>
                                    <input type="text" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{1,35}" class="form-control" name="calle_reg" id="calle_reg" maxlength="35" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="numero_reg" class="bmd-label-floating">Numero</label>
                                    <input type="number" min="1" max="999" class="form-control" name="numero_reg" id="numero_reg" maxlength="5" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="interior_reg" class="bmd-label-floating">Interior</label>
                                    <input type="text" class="form-control" name="interior_reg" id="interior_reg" maxlength="20">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="colonia_reg" class="bmd-label-floating">Colonia</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,45}" class="form-control" name="colonia_reg" id="colonia_reg" maxlength="45" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="codigo_postal" class="bmd-label-floating">Codígo Postal</label>
                                    <input type="number" min="20000" pattern="[2-9][0-9]{4}" class="form-control" name="codigo_postal" id="codigo_postal" maxlength="5" required="" oninput="buscarColonias()">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="municipio_reg" class="bmd-label-floating">Municipio</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,30}" class="form-control" name="municipio_reg" id="municipio_reg" maxlength="45" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="entidad_reg" class="bmd-label-floating">Entidad</label>
                                    <input type="text" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,30}" class="form-control" name="entidad_reg" id="entidad_reg" maxlength="45" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br><br><br>
                <fieldset>
                    <legend><i class="fas fa-user-lock"></i> &nbsp; Información de la cuenta</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="usuario_reg" class="bmd-label-floating">Nombre de usuario</label>
                                    <input type="text" pattern="[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{8,35}" class="form-control" name="usuario_reg" id="usuario_reg" maxlength="35" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="email" class="bmd-label-floating">Email</label>
                                    <input type="email" class="form-control" pattern="[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-z]{2,}" name="email_reg" id="email_reg" maxlength="70" required="">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="activo_reg" required="">
                                        <option value="" selected="" disabled="">Activo</option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="clave_1_reg" class="bmd-label-floating">Contraseña</label>
                                    <input type="password" class="form-control" name="clave_1_reg" id="clave_1_reg" pattern="(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$@.\-])[a-zA-Z0-9$@.\-]{7,100}" maxlength="100" required="" >
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="clave_2_reg" class="bmd-label-floating">Repetir contraseña</label>
                                    <input type="password" class="form-control" name="clave_2_reg" id="clave_2_reg" pattern="(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$*@.\-])[a-zA-Z0-9$*@.\-]{7,100}" maxlength="100" required="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br><br><br>
                <fieldset>
                    <legend><i class="fas fa-medal"></i> &nbsp; Nivel de privilegio</legend>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <p><span class="badge badge-info">S. Adiministrador</span> Todos los Permisos</p>
                                <p><span class="badge badge-info">Administrador</span> Permisos para registrar, actualizar y eliminar</p>
                                <p><span class="badge badge-success">Ventas</span> Permisos para registrar y actualizar</p>
                                <p><span class="badge badge-success">Compras</span> Solo permisos para inventarios</p>
                                <p><span class="badge badge-secondary">Médico</span> Permisos sobre pacientes</p>
                                <p><span class="badge badge-secondary">Paciente</span> Permisos para registrar</p>
                                <p><span class="badge badge-primary">Cliente</span> Ningun Permiso</p>
                                <div class="form-group">
                                    <select class="form-control" name="privilegio_reg" required="">
                                        <option value="" selected="" disabled="">Seleccione una opción</option>
                                        <option value="1">S. Administrador</option>
                                        <option value="2">Administrador</option>
                                        <option value="3">Ventas</option>
                                        <option value="4">Compras</option>
                                        <option value="5">Médico</option>
                                        <option value="6">Paciente</option>
                                        <option value="7">Cliente</option>
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
    </section>
</main>