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
                <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO
            </h3>
            <p class="text-justify">
                Sistema de agregación de productos
            </p>
        </div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                    <a class="active" href="../../index.php"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
                </li>
                <li>
                    <a href="../../index.php"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
                </li>
                <li>
                    <a href="../../index.php"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
                </li>
            </ul>
        </div>

        <!-- Content here-->
        <div class="container-fluid">
            <form action="" class="form-neon" autocomplete="off">
                <div class="container-fluid">
                    <form class="form-neon formularioAjax" id="direccionForm" action="../../ajax/usuarioAjax.php" method="post" data-form="save" autocomplete="off">
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
                        <br><br><br>
                        <p class="text-center" style="margin-top: 40px;">
                            <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                            &nbsp; &nbsp;
                            <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                        </p>
                    </form>
                </div>
    </section>
</main>