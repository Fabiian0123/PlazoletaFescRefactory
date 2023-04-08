<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Crear Propietario</title>
</head>
<body>
  <?php
    session_start();

    if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'propietario') {
      header('Location: login.php');
      exit;
    }
  ?>
  <h1>Crear Propietario</h1>
  <form action="../Controller/crearEmpleadoController.php" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre"><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido"><br>

    <label for="documento">Documento de Identidad:</label>
    <input type="text" id="documento" name="documento"><br>

    <label for="celular">Celular:</label>
    <input type="text" id="celular" name="celular"><br>

    <label for="correo">Correo:</label>
    <input type="text" id="correo" name="correo"><br>
    
    <input type="submit" value="Crear Propietario">
  </form>
</body>
</html>
