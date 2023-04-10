<?php
session_start();

if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] !== 'propietario') {
	header('Location: ../View/login.php');
	exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nombre = $_POST['nombre'] ?? '';
	$precio = $_POST['precio'] ?? '';
	$descripcion = $_POST['descripcion'] ?? '';
	$url_imagen = $_POST['urlImagen'] ?? '';
	$categoria = $_POST['categoria'] ?? '';
	$activo = isset($_POST['activo']) ? 1 : 0;
	$id_restaurante = $_POST['idRestaurante'] ?? '';

    $host = 'localhost';
    $db   = 'plazoleta';
    $user = 'root';
    $pass = '';

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

	$sql = 'INSERT INTO plato (nombre, precio, descripcion, urlImagen, categoria, activo, idRestaurante) VALUES (?, ?, ?, ?, ?, ?, ?)';
	$stmt = $mysqli->prepare($sql);
	
    $stmt->bind_param("sisssii", $nombre, $precio, $descripcion, $url_imagen, $categoria, $activo, $id_restaurante);

    if ($stmt->execute()) {
        echo'<script type="text/javascript">
        alert("Plato Creado Exitosamente");
        window.location.href="/plazoletaFesc/View/DashboardPropietario/DashboardPropietario.php";
        </script>';
    } else {
        echo "Error al crear el plato: " . $mysqli->error;
    }

    $stmt->close();
    $mysqli->close();
}
?>
