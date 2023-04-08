<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$documento = $_POST["documento"];
	$celular = $_POST["celular"];
	$correo = $_POST["correo"];
	$clave = password_hash($_POST["clave"], PASSWORD_DEFAULT);
	$rol = "usuario";

	$host = 'localhost';
	$db   = 'plazoleta';
	$user = 'root';
	$pass = '';

	$mysqli = new mysqli($host, $user, $pass, $db);

	if ($mysqli->connect_error) {
		die("Error de conexión a la base de datos: " . $mysqli->connect_error);
	}

	$sql = "INSERT INTO usuario (nombre, apellido, DocumentoDeIdentidad, celular, correo, clave, rol) VALUES (?, ?, ?, ?, ?, ?, ?)";

	$stmt = $mysqli->prepare($sql);

	$stmt->bind_param("ssissss", $nombre, $apellido, $documento, $celular, $correo, $clave, $rol);

	if ($stmt->execute()) {
		header("Location: ../View/login.php");
		exit();
	} else {
		echo "Error al registrar el usuario: " . mysqli_error($conexion);
	}

	$stmt->close();
  	$mysqli->close();
}
?>
