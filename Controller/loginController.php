<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$correo = $_POST["correo"];
	$clave = $_POST["clave"];
	$rol = $_POST["rol"];

	$host = 'localhost';
	$db   = 'plazoleta';
	$user = 'root';
	$pass = '';
	$port = '3306';
  
	$mysqli = new mysqli($host, $user, $pass, $db, $port);
  
	if ($mysqli->connect_error) {
	  die("Error de conexión a la base de datos: " . $mysqli->connect_error);
	}
  
	$sql = "SELECT * FROM usuario WHERE correo='$correo' AND rol='$rol'";
	
	$resultado = $mysqli->query($sql);
  
	$usuario = $resultado->fetch_assoc();

	if ($usuario && password_verify($clave, $usuario['Clave'])) {

		session_start();

		$_SESSION["usuario_id"] = $usuario["id"];
		$_SESSION["usuario_nombre"] = $usuario["Nombre"];
		$_SESSION["usuario_rol"] = $usuario["Rol"];

		header("Location: ../View/index.php");
		exit();

	} else {
		echo "El usuario no existe o no tiene el rol especificado.";
	}

	$stmt->close();
  	$mysqli->close();
}
