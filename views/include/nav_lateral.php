<!-- Nav lateral -->
<section class="full-box nav-lateral">
    <div class="full-box nav-lateral-bg show-nav-lateral"></div>
    <div class="full-box nav-lateral-content">
        <figure class="full-box nav-lateral-avatar">
            <i class="far fa-times-circle show-nav-lateral"></i>
            <img src="./views/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
            <figcaption class="roboto-medium text-center">
                Oscar Raygoza <br><small class="roboto-condensed-light">Web Developer</small>
            </figcaption>
        </figure>
        <div class="full-box nav-lateral-bar"></div>
        <nav class="full-box nav-lateral-menu">
            <ul>
                <li>
                    <a href="<?php echo SERVERURL; ?>home"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Panel </a>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Pacientes <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL; ?>client-new"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Paciente</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>client-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de pacientes</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>client-search"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar paciente</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>client-update"><i class="fas fa-sync-alt fa-fw"></i> &nbsp; Actualizar paciente</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Productos <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL; ?>product-new"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Producto</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>product-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Productos</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>product-search"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Producto</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>product-update"><i class="fas fa-search fa-fw"></i> &nbsp; Modificar Producto</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-calendar-alt fa-fw"></i> &nbsp; Citas Médicas<i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-approved"><i class="far fa-calendar-alt fa-fw"></i> &nbsp; Nueva cita</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-status"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Buscar Cita</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Cancelar Cita</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Reprogramar Cita</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Ventas <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-new"><i class="fas fa-plus fa-fw"></i> &nbsp; Nueva venta</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-new"><i class="fas fa-plus fa-fw"></i> &nbsp; Cancelar Venta</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-update"><i class="fas fa-plus fa-fw"></i> &nbsp; Modificar venta</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>reservation-search"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar por fecha</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Usuarios <i class="fas fa-chevron-down"></i></a>
                    <ul>
                        <li>
                            <a href="<?php echo SERVERURL; ?>user-new"><i class="fas fa-plus fa-fw"></i> &nbsp; Nuevo usuario</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>user-list"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de usuarios</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>user-search"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar usuario</a>
                        </li>
                        <li>
                            <a href="<?php echo SERVERURL; ?>user-search"><i class="fas fa-search fa-fw"></i> &nbsp; Modificar usuario</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo SERVERURL; ?>/company"><i class="fas fa-store-alt fa-fw"></i> &nbsp; Empresa</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
