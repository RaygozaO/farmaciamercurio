<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=tu_base_de_datos', 'usuario', 'contraseña');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fotografia"]["name"]);
        move_uploaded_file($_FILES["fotografia"]["tmp_name"], $target_file);

        $sql = "INSERT INTO productos (nombre, codigobar, precio, presentacion, gramaje,enabled, fotografia,stock_idstock) VALUES (:nombre, :codigo_barra, :stock, :estado, :detalle, :fecha, :fotografia)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':nombre', $_POST['item_nombre_reg']);
        $stmt->bindParam(':codigobar', $_POST['item_codigo_reg']);
        $stmt->bindParam(':precio', $_POST['item_stock_reg']);
        $stmt->bindParam(':estado', $_POST['item_estado_reg']);
        $stmt->bindParam(':detalle', $_POST['item_detalle_reg']);
        $stmt->bindParam(':fecha', $_POST['item_fecha_reg']);
        $stmt->bindParam(':fotografia', $target_file);

        $stmt->execute();

        echo "Nuevo producto agregado con éxito";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


// Conectar a la base de datos
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=tu_base_de_datos', 'usuario', 'contraseña');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Obtener el número de página actual
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 12;
        $offset = ($page - 1) * $limit;

        // Contar el número total de productos
        $total_stmt = $pdo->query("SELECT COUNT(*) FROM productos");
        $total_products = $total_stmt->fetchColumn();

        // Calcular el número total de páginas
        $total_pages = ceil($total_products / $limit);

        // Obtener los productos para la página actual
        $stmt = $pdo->prepare("SELECT * FROM productos LIMIT :limit OFFSET :offset");
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();

        $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }


}


