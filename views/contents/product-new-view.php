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
        </div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                    <a class="active" href="./product-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
                </li>
                <li>
                    <a href="./product-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
                </li>
                <li>
                    <a href="./product-search"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR ITEM</a>
                </li>
            </ul>
        </div>

        <!--CONTENT-->
        <div class="container-fluid">
            <form action="" class="form-neon col d-inline-block" autocomplete="off">
                <div class="row">
                    <!-- Primera columna -->
                    <fieldset class="col-lg-6">
                        <legend><i class="far fa-plus-square"></i> &nbsp; Información del Producto</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_codigo" class="bmd-label-floating">Código</label>
                                        <input type="text" pattern="[a-zA-Z0-9-]{1,45}" class="form-control" name="item_codigo_reg" id="item_codigo" maxlength="45">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_nombre" class="bmd-label-floating">Nombre</label>
                                        <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_stock" class="bmd-label-floating">Categoria</label>
                                        <input type="number" pattern="[0-9]{1,9}" class="form-control" name="item_stock_reg" id="item_stock" maxlength="9">
                                    </div>
                                </div>
                            </div>
                            <legend><i class="fa fa-money-bill-wave"></i>&nbsp; Unidades y Precio</legend>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="item_nombre" class="bmd-label-floating">Unidades</label>
                                    <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140">
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="item_nombre" class="bmd-label-floating">Precio</label>
                                    <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140">
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="item_nombre" class="bmd-label-floating">Descuento</label>
                                    <input type="text" pattern="[a-zA-záéíóúÁÉÍÓÚñÑ0-9 ]{1,140}" class="form-control" name="item_nombre_reg" id="item_nombre" maxlength="140">
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <!-- Segunda columna -->
                    <fieldset class="col-lg-6">
                        <legend><i class="far fa-handshake"></i> &nbsp; Provedor, Modelo y Marca</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_estado" class="bmd-label-floating">Provedor</label>
                                        <select class="form-control" name="item_estado_reg" id="item_estado">
                                            <option value="" selected="" disabled="">Seleccione una opción</option>
                                            <option value="Habilitado">Habilitado</option>
                                            <option value="Deshabilitado">Deshabilitado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_detalle" class="bmd-label-floating">Modelo</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" name="item_detalle_reg" id="item_detalle" maxlength="190">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_detalle" class="bmd-label-floating">Marca</label>
                                        <input type="text" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{1,190}" class="form-control" name="item_detalle_reg" id="item_detalle" maxlength="190">
                                    </div>
                                </div>
                                <legend><i class="fa fa-calendar-times"></i>&nbsp; Caducidad y Fotografia</legend>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_fecha" class="bmd-label">Fecha</label>
                                        <input type="date" class="form-control" name="item_fecha_reg" id="item_fecha">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12">
                                    <div class="form-group">
                                        <label for="item_estado" class="bmd-label-floating">Provedor</label>
                                        <select class="form-control" name="item_estado_reg" id="item_estado">
                                            <option value="" selected="" disabled="">Seleccione una opción</option>
                                            <option value="1">Dsiponible</option>
                                            <option value="0">No disponible</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mdl-textfield mdl-js-textfield mt-4">
                                    <label class="bmd-label-floating">Fotografia &nbsp;</label>
                                    <input type="file" class="form-control" name="fotografia" id="fotografia">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
                <p class="text-center" style="margin-top: 40px;">
                    <button type="reset" class="btn btn-raised btn-secondary btn-sm"><i class="fas fa-paint-roller"></i> &nbsp; LIMPIAR</button>
                    &nbsp; &nbsp;
                    <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                </p>
            </form>
        </div>
    </section>
</main>