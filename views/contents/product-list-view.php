<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
    </h3>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="<?php echo SERVERURL; ?>producto-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
        </li>
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>item-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>item-search"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
        </li>
    </ul>
</div>

<!--CONTENT-->
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
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
                <td>NOMBRE DEL PRODUCTO</td>
                <td>20</td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Detalle producto" data-content="Texto detalle del producto">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </td>
                <td>
                    <a href="<?php echo SERVERURL; ?>product-update" class="btn btn-success">
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
                <td>NOMBRE DEL PRODUCTO</td>
                <td>57</td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </td>
                <td>
                    <a href="<?php echo SERVERURL; ?>product-update" class="btn btn-success">
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
                <td>NOMBRE DEL PRODUCTO</td>
                <td>81</td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </td>
                <td>
                    <a href="item-update.html" class="btn btn-success">
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
                <td>NOMBRE DEL PRODUCTO</td>
                <td>90</td>
                <td>
                    <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="hover" title="Titulo del item" data-content="Texto detalle del item ">
                        <i class="fas fa-info-circle"></i>
                    </button>
                </td>
                <td>
                    <a href="item-update.html" class="btn btn-success">
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
