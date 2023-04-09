<!DOCTYPE html>
<html>
<head>
	<title>Crear Restaurante</title>
</head>
<body>
	<?php 
		session_start();
		
		if(!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'administrador'){
			header('Location: login.php');
			exit();
		}
	?>
	<h1>Crear Restaurante</h1>
	<form action="/plazoletaFesc/Controller/crearRestauranteController.php" method="POST">
		
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" required><br>

		<label for="nit">NIT:</label>
		<input type="number" name="nit" required><br>

		<label for="direccion">Dirección:</label>
		<input type="text" name="direccion" required><br>

		<label for="telefono">Teléfono:</label>
		<input type="number" name="telefono" required><br>

		<label for="urlLogo">URL Logo:</label>
		<input type="text" name="urlLogo" required><br>

		<label for="propietario">Propietario:</label>
		<select name="propietario" required>
			<option value="">Seleccione un propietario</option>
			<?php
				$conexion = new mysqli("localhost", "root", "", "plazoleta");

				$query = "SELECT id, nombre, apellido FROM usuario WHERE rol = 'propietario'";

				$resultado = $conexion->query($query);

				while ($fila = $resultado->fetch_assoc()) {
					echo "<option value='" . $fila["id"] . "'>" . $fila["nombre"] . " " . $fila["apellido"] . "</option>";
				}

				$conexion->close();
			?>
		</select><br>

		<input type="submit" value="Crear">
	</form>
</body>
</html>
