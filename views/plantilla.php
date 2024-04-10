<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?> </title>
    <!-- Contenedor de Estilos -->
    <?php include "./views/include/links.php" ?>
</head>
<body>
<?php
		$peticionAjax =false;

		require_once "./controllers/vistas_controller.php";
		$IV = new  vistas_controller();
		$result = $IV->get_views_controller();
		if($result=="login" || $result=="404"){
			require_once "./views/contents/".$result."-view.php";
		}else{
	?>
	<!-- Main container -->
	<main class="full-box main-container">
		<!--barra de navegacion-->
        <?php include "./views/include/nav_lateral.php"?>
		<!-- Page content -->
		<section class="full-box page-content">
		<?php 
				include "./views/include/nav_bar.php";
				include $result;
			?>
		</section>
	</main>
	<?php }
		include "./views/include/scripts.php" ?>
</body>
</html>