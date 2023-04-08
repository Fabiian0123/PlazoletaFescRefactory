<?php

session_start();

if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'propietario') {
	header('Location: ../View/login.php');
	exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$id = $_POST["id"];
	$precio = $_POST["precio"];
	$descripcion = $_POST["descripcion"];

    $host = 'localhost';
    $db   = 'plazoleta';
    $user = 'root';
    $pass = '';

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
    }

	$sql = "UPDATE plato SET precio = ?, descripcion = ? WHERE id = ?";
	$stmt = $mysqli->prepare($sql);

	$stmt->bind_param("isi", $precio, $descripcion, $id);

	if ($stmt->execute()) {
        echo "plato modificado exitosamente";
    } else {
        echo "Error al modificar el plato: " . $mysqli->error;
    }

    $stmt->close();
    $mysqli->close();
}
?>
