<?php
session_start();

session_unset();
session_destroy();

header("Location: /plazoletaFesc/View/Loguin/login.php");
exit();
?>
