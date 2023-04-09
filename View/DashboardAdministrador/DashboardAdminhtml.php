<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Admin</title>
    <link rel="icon" type="image/x-icon" href="/plazoletaFesc/View/DashboardAdministrador/assets/img/iconoFesc.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
        rel="stylesheet" type="text/css" />
    <link href="css/stylesDashboardAdmin.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"/>
</head>
<body id="page-top">
     <!--Modal-->
        <section class="modal ">
            <div class="modal__container">
                <h2 class="titulo--modal">Crea Un Propietario</h2>
                <body>
                    <?php
                        session_start();

                        if (!isset($_SESSION['usuario_rol']) || $_SESSION['usuario_rol'] != 'administrador') {
                            header('Location: login.php');
                            exit;
                        }
                    ?>
                    <form action="/plazoletaFesc/Controller/crearPropietarioController.php" method="POST">

                        <label class="sty-form-modal" for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required><br><br>

                        <label class="sty-form-modal" for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" required><br><br>

                        <label class="sty-form-modal" for="documento">Cedula:</label>
                        <input type="number" id="documento" name="documento" required><br><br>

                        <label class="sty-form-modal" for="celular">Celular:</label>
                        <input type="number" id="celular" name="celular" required><br><br>

                        <label class="sty-form-modal" for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" required><br><br>
                        
                        <input class="crear__pro" type="submit" value="Crear Propietario">
                        <a href="#" class="modal__close">Cerrar</a>
                    </form>
                </body>
                
                
            </div>
        </section>
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Plazoleta Fesc</a></li>
            <li class="sidebar-nav-item"><a href="/plazoletaFesc/Controller/logout.php">Cerrar Sesion</a></li>
            <li class="sidebar-nav-item"><a href="#about">Cambiar Contraseña</a></li>
            <li class="sidebar-nav-item"><a href="#about">Ayuda</a></li>
        </ul>
    </nav>
    <header class="masthead d-flex align-items-center">
        
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">¿Que quieres hacer hoy?</h1>
            <h3 class="mb-5"><em>Puedes realizar estas acciones</em></h3>
            <a id="restaurante" class="btn-abrir-popup btn-xl">Crear Un Propietario</a>
            <a id="propietario" class="btn-abrir-popup btn-xl">Crear Un Restaurante</a>
        </div>
          
    </header>
    <section class="content-section bg-light" id="about">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2 style="color:black">Cambiar Contraseña</h2>
                        <h5 style="color:red">
                            <form method="POST" action="CambirContraseña.php">
                                
                                <input type="password" name="contraseñaactual" placeholder="Contraseña Actual" required>
                                <br>
                                <br>
                                <input type="password" name="contraseñanueva" placeholder="Contraseña Nueva" required>
                                <br>
                                <br>
                                <input type="password" name="contraseñarepita" placeholder="Valide" required>
                                <br>
                                <br>
                                <button class="cambiar" type="submit" name="btncambiar">Cambiar!</button>
                            
                            </form>
                        </h5>
                </div>
            </div>
        </div>
    </section>
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="/plazoletaFesc/View/DashboardAdministrador/js/main.js"></script>   
  
</body>


</html>