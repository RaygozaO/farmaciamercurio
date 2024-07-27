<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="../images/icon/apple-icon-57x57.png" type="image/x-icon">
    <title><?php echo COMPANY; ?></title>
    <?php include './views/include/Links.php'?>
</head>
<body>
    <?php
        $peticionAjax = false;
        require_once "./controllers/vistasController.php";
        $IV = new vistasController();
        $vistas = $IV -> getViews_controller();
        if($vistas == "login" || $vistas == "404"){
            require_once "./views/contents/".$vistas."-view.php";
        }else{
        ?>
        <!-- Main container -->
        <main class="full-box main-container">
            <!-- Nav lateral -->
            <?php include './views/include/navLateral.php'; ?>
            <?php include $vistas; ?>
        </main>
    <?php } include './views/include/Scripts.php'?>
</body>
</html>
