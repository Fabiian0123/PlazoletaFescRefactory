<?php

session_start();

if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'administrador') {
  header('Location: ../View/login.php');
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $documento = $_POST['documento'];
  $celular = $_POST['celular'];
  $correo = $_POST['correo'];
  $clave = password_hash($_POST['documento'], PASSWORD_DEFAULT);
  $rol = "propietario";

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
    echo "Propietario creado exitosamente";
  } else {
    echo "Error al crear el propietario: " . $mysqli->error;
  }

  $stmt->close();
  $mysqli->close();
}
?>
