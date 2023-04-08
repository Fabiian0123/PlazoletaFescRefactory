<!DOCTYPE html>
<html>
<head>
	<title>Crear Plato</title>
</head>
<body>
    <?php 
		session_start();
		
		if(!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'propietario'){
			header('Location: login.php');
			exit();
		}
		$id = $_SESSION["usuario_id"];
	?>
	<h1>Crear Plato</h1>
	<form method="POST" action="../Controller/crearPlatoController.php">
		
		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required><br><br>

		<label for="precio">Precio:</label>
		<input type="number" id="precio" name="precio" required><br><br>

		<label for="descripcion">Descripción:</label>
		<textarea id="descripcion" name="descripcion"></textarea><br><br>

		<label for="urlImagen">URL de la imagen:</label>
		<input type="text" id="urlImagen" name="urlImagen"><br><br>

		<label for="categoria">Categoría:</label>
		<input type="text" id="categoria" name="categoria"><br><br>

		<label for="activo">Activo:</label>
		<input type="checkbox" id="activo" name="activo" checked><br><br>

		<label for="idRestaurante">Restaurante:</label>
		<select id="idRestaurante" name="idRestaurante">
			<option value="">Seleccione un restaurnate</option>
            <?php
				$conexion = new mysqli("localhost", "root", "", "plazoleta");

				$query = "SELECT id, Nombre, NIT FROM restaurante WHERE idPropietario = $id";

				$resultado = $conexion->query($query);

				while ($fila = $resultado->fetch_assoc()) {
					echo "<option value='" . $fila["id"] . "'>" . $fila["Nombre"] . " " . $fila["NIT"] . "</option>";
				}

				$conexion->close();
			?>
		</select><br><br>

		<input type="submit" value="Crear Plato">
	</form>
</body>
</html>
