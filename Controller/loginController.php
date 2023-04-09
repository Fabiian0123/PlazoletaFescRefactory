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

		if ($_SESSION["usuario_rol"] == "usuario") {

			echo "<p>Este contenido solo es visible para usuarios.</p>";
	
		} elseif ($_SESSION["usuario_rol"] == "empleado") {
	
			echo "<p>Este contenido solo es visible para empleados.</p>";
	
		} elseif ($_SESSION["usuario_rol"] == "propietario") {
	
			echo "<p>Este contenido solo es visible para propietarios.</p><br>";
			
	
		} elseif ($_SESSION["usuario_rol"] == "administrador") {
			
			header("Location: /plazoletaFesc/View/DashboardAdministrador/DashboardAdminhtml.php");
			exit();
		}	
	}
	else {
		echo '<script type="text/javascript">
    	alert("Usuario, Contraseña Incorrectos, Especifique Un Rol Valido");
    	window.location.href="/plazoletaFesc/View/Loguin/login.php";
    	</script>';
	}

	$stmt->close();
  	$mysqli->close();
}
