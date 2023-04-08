<!DOCTYPE html>
<html>
<head>
	<title>Modificar Plato</title>
</head>
<body>
	<?php
		session_start();
		
		if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'propietario') {
			header('Location: login.php');
			exit();
		}
	?>
	<h1>Modificar Plato</h1>
	<form method="POST" action="../Controller/modificarPlatoController.php">

        <label for='id'>Plato:</label>
		<select id='id' name='id'>
		    <option value=''>Seleccione un plato</option>
				
			<?php
				$conexion = new mysqli("localhost", "root", "", "plazoleta");

				$query = "SELECT id, Nombre, Precio FROM plato";

				$resultado = $conexion->query($query);

				while ($fila = $resultado->fetch_assoc()) {
					echo "<option value='" . $fila["id"] . "'>" . $fila["Nombre"] . " " . $fila["Precio"] . "</option>";
				}

				$conexion->close();
            ?>
				
		</select><br><br>

		<label for="precio">Precio:</label>
		<input type="number" name="precio" required><br><br>

		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion" required></textarea><br><br>

		<input type="submit" value="Modificar">
	</form>
</body>
</html>
