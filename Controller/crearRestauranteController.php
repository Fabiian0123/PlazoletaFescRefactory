<?php
	session_start();

	if (!isset($_SESSION['usuario_rol']) || $_SESSION["usuario_rol"] != "administrador") {
		header("Location: ../View/login.php");
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nombre = $_POST["nombre"];
		$nit = $_POST["nit"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];
		$url_logo = $_POST["urlLogo"];
		$propietario = $_POST["propietario"];

        $host = 'localhost';
        $db   = 'plazoleta';
        $user = 'root';
        $pass = '';

        $mysqli = new mysqli($host, $user, $pass, $db);

        if ($mysqli->connect_error) {
        die("Error de conexión a la base de datos: " . $mysqli->connect_error);
        }

		$sql = "INSERT INTO restaurante (nombre, nit, direccion, telefono, urlLogo, idPropietario) VALUES (?, ?, ?, ?, ?, ?)";
		$stmt = $mysqli->prepare($sql);

        $stmt->bind_param("sisisi", $nombre, $nit, $direccion, $telefono, $url_logo, $propietario);

        if ($stmt->execute()) {
        echo "Restaurante creado exitosamente";
        } else {
        echo "Error al crear el restaurante: " . $mysqli->error;
        }

        $stmt->close();
        $mysqli->close();
    }
?>