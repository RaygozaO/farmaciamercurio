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
                <i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO
            </h3>
        </div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                    <a href="./product-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
                </li>
                <li>
                    <a href="./product-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
                </li>
                <li>
                    <a class="active" href="./product-search"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
                </li>
            </ul>
        </div>

        <!--CONTENT-->
        <div class="container-fluid">
            <form class="form-neon" action="">
                <div class="container-fluid">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="inputSearch" class="bmd-label-floating">¿Qué item estas buscando?</label>
                                <input type="text" class="form-control" name="busqueda-" id="inputSearch" maxlength="30">
                            </div>
                        </div>
                        <div class="col-12">
                            <p class="text-center" style="margin-top: 40px;">
                                <button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container-fluid">
            <form action="">
                <input type="hidden" name="eliminar-busqueda" value="eliminar">
                <div class="container-fluid">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-md-6">
                            <p class="text-center" style="font-size: 20px;">
                                Resultados de la busqueda <strong>“Buscar”</strong>
                            </p>
                        </div>
                        <div class="col-12">
                            <p class="text-center" style="margin-top: 20px;">
                                <button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
                            </p>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-success table-striped">
                    <thead>
                    <tr class="text-center roboto-medium">
                        <th>#</th>
                        <th>CÓDIGO</th>
                        <th>NOMBRE</th>
                        <th>STOCK</th>
                        <th>DETALLE</th>
                        <th>ACTUALIZAR</th>
                        <th>ELIMINAR</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center" >
                        <td>1</td>
                        <td>012342567</td>
                        <td>NOMBRE DEL ITEM</td>
                        <td>20</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>2</td>
                        <td>012342567</td>
                        <td>NOMBRE DEL ITEM</td>
                        <td>57</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>3</td>
                        <td>012342567</td>
                        <td>NOMBRE DEL ITEM</td>
                        <td>81</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>4</td>
                        <td>012342567</td>
                        <td>NOMBRE DEL ITEM</td>
                        <td>90</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                                <i class="fas fa-info-circle"></i>
                            </button>
                        </td>
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                        </td>
                        <td>
                            <form action="">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>