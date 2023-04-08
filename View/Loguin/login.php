<!DOCTYPE html>
<html>
<head>
<title>Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/iconoFesc.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-loginAdmin.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Iniciar Sesión 
				</span>
					<form action="/plazoletaFesc/Controller/loginController.php" method="POST" class="login100-form validate-form p-b-33 p-t-5">
						<div class="wrap-input100 validate-input" data-validate="Ingrese el correo">
							<label for="correo"></label>
							<input class="input100" type="email" placeholder="Correo" type="email" id="correo" name="correo">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>	

						<div class="wrap-input100 validate-input" data-validate="Ingrese la clave">
							<label for="clave"></label>
							<input class="input100" type="password" placeholder="Clave"type="password"  id="clave" name="clave">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>
						<div class="rol">
							<label  for="rol">Selecciona Un Rol:</label>
							<select id="rol" name="rol">
								<option value="usuario">Usuario</option>
								<option value="empleado">Empleado</option>
								<option value="propietario">Propietario</option>
								<option value="administrador">Administrador</option>
							</select>
						</div>
				
						<div class="container-login100-form-btn m-t-32">
							<input class="login100-form-btn" type="submit" value="Ingresar">
						</div>
					</form>
				<!--
				<form action="logicaLoguinAdmin.php" method="post" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate="Ingrese el usuario">
						<input class="input100" type="text" name="usuario" placeholder="Correo">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese la contraseña">
						<input class="input100" type="password" name="password" placeholder="Clave">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div>

					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>

				</form>
				-->
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

	<!--
		<form action="../Controller/loginController.php" method="POST">
		<label for="correo">Correo:</label>
		<input type="email" id="correo" name="correo"><br>

		<label for="clave">Clave:</label>
		<input type="password" id="clave" name="clave"><br>

		<label for="rol">Rol:</label>
		<select id="rol" name="rol">
			<option value="usuario">Usuario</option>
			<option value="empleado">Empleado</option>
			<option value="propietario">Propietario</option>
			<option value="administrador">Administrador</option>
		</select><br>

		<input type="submit" value="Iniciar Sesión">
	</form>
	-->
</body>
</html>