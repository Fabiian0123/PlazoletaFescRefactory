<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Start</title>
    <link rel="icon" type="image/x-icon" href="assets/iconoFesc.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
	<div class="container px-4 px-lg-5">
		<a class="navbar-brand" href="#page-top">Plazoleta De Comidas Fesc</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
			data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
			aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ms-auto my-2 my-lg-0">
				<li class="nav-item"><a class="nav-link" href="#about">Quienes Somos</a></li>
			</ul>
		</div>
	</div>
</nav>
<header class="masthead">
	<div class="container px-4 px-lg-5 h-100">
		<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-8 align-self-end">
				<h1 class="text-white font-weight-bold">Bienvenido al dashboard de la plazoleta de comidas FESC</h1>
				
			</div>
			<div class="col-lg-8 align-self-baseline">
				<p class="text-white-75 mb-5"></p>
				<a class="btn btn-primary btn-xl" href="/plazoletaFesc/View/Loguin/login.php">Iniciar Sesión</a>
				
			</div>
		</div>
	</div>
</header>
<section class="page-section bg-primary" id="about">
	<div class="container px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-lg-8 text-center">
				<h2 class="text-white mt-0">Quienes Somos</h2>
				<hr class="divider divider-light" />
				<p class="text-white-75 mb-4">Somos estudiantes de quinto semestre de la universidad Fesc, hemos
					desarrollado
					este software para la plazoleta de comidas de la FESC
				</p>

			</div>
		</div>
	</div>
</section>
<footer class="bg-light py-5">
	<div class="container px-4 px-lg-5">
		<div class="small text-center text-muted">Copyright &copy; 2023 - Estudiantes 5to Semestre Fesc</div>
	</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
	<?php
	session_start();
	
	if (!isset($_SESSION["usuario_id"]) || !isset($_SESSION["usuario_nombre"]) || !isset($_SESSION["usuario_rol"])) {
		
		exit();
	}
	
	/*
	if ($_SESSION["usuario_rol"] == "usuario") {

		echo "<p>Este contenido solo es visible para usuarios.</p>";

	} elseif ($_SESSION["usuario_rol"] == "empleado") {

		echo "<p>Este contenido solo es visible para empleados.</p>";

	} elseif ($_SESSION["usuario_rol"] == "propietario") {

		echo "<p>Este contenido solo es visible para propietarios.</p><br>";
		echo "<a href='./crearPlato.php'>Crear plato.</a><br>";
		echo "<a href='./modificarPlato.php'>Modificar plato.</a><br>";
		echo "<a href='./crearEmpleado.php'>Crear empleado.</a><br>";

	} elseif ($_SESSION["usuario_rol"] == "administrador") {

		echo"<p>Este contenido solo es visible para administradores.</p><br>";
		echo "<a href='./crearPropietario.php'>Crear propietario.</a><br>";
		echo "<a href='./crearRestaurante.php'>Crear restaurante.</a><br>";
	}
	*/
	?>
	<!--<p><a href="../Controller/logout.php">Cerrar Sesión</a></p>-->
</body>
</html>
