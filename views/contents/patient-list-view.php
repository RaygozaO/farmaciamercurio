
<!-- Main container -->
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
                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PACIENTES
            </h3>
            <p class="text-justify">
                listado de pacientes.
            </p>
        </div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                    <a href="./user-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PACIENTE</a>
                </li>
                <li>
                    <a class="active" href="./patient-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PACIENTES</a>
                </li>
                <li>
                    <a href="./patient-search"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PACIENTE</a>
                </li>
            </ul>
        </div>

        <!-- Content here-->
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table table-dark table-sm">
                    <thead>
                    <tr class="text-center roboto-medium">
                        <th>#</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>TELEFONO</th>
                        <th>DIRECCIÓN</th>
                        <th>ACTUALIZAR</th>
                        <th>ELIMINAR</th>
                        <th>ARCHIVO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="text-center" >
                        <td>1</td>
                        <td>NOMBRE DEL CLIENTE</td>
                        <td>APELLIDO DEL CLIENTE</td>
                        <td>72349874</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
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
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fa fa-file-archive" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>2</td>
                        <td>NOMBRE DEL CLIENTE</td>
                        <td>APELLIDO DEL CLIENTE</td>
                        <td>72349874</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
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
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fa fa-file-archive" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>3</td>
                        <td>NOMBRE DEL CLIENTE</td>
                        <td>APELLIDO DEL CLIENTE</td>
                        <td>72349874</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
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
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fa fa-file-archive" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    <tr class="text-center" >
                        <td>4</td>
                        <td>NOMBRE DEL CLIENTE</td>
                        <td>APELLIDO DEL CLIENTE</td>
                        <td>72349874</td>
                        <td>
                            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Nombre del cliente" data-content="Direccion completa del cliente">
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
                        <td>
                            <a href="../../index.php" class="btn btn-success">
                                <i class="fa fa-file-archive" aria-hidden="true"></i>
                            </a>
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
