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
                <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
            </h3>
        </div>

        <div class="container-fluid">
            <ul class="full-box list-unstyled page-nav-tabs">
                <li>
                    <a href="./product-new"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
                </li>
                <li>
                    <a class="active" href="./product-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS</a>
                </li>
                <li>
                    <a href="./product-search"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR PRODUCTO</a>
                </li>
            </ul>
        </div>

        <!--CONTENT-->
        <div class="container-fluid">
            <div class="row">
                <?php $productos =0;
                foreach ($productos as $producto): ?>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($producto['nombre']); ?></h5>
                                <img src="../../assets/img/fondoLoto.jpg" class="card-img-top" alt="...">
                                <p class="card-text"><?php echo htmlspecialchars($producto['detalle']); ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item <?php $page = 0; $total_pages=0;
                if ($page <= 1) echo 'disabled'; ?>">
                    <a class="page-link" href="?page=<?php echo $page - 1; ?>" tabindex="-1">Previous</a>
                </li>
                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <li class="page-item <?php if ($page == $i) echo 'active'; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="page-item <?php if ($page >= $total_pages) echo 'disabled'; ?>">
                    <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                </li>
            </ul>
        </nav>

        </div>
    </section>
</main>