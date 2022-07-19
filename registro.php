<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Sesion</title>
</head>
<body class="bg-primary">


    <nav class="navbar navbar-dark navbar-expand-md bg-dark navbar-expand-md fixed-top">
        <div class="container">
          <a href="#" class="navbar-brand">
            <strong>apprehendere</strong>
          </a>
    
            <button type="button" class="navbar-toggler" data-toggle="collapse"
            data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false"
            aria-label="Desplegar menú de navegación">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="menu-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="inicio.php" class="nav-link active">Inicio</a></li>
            </ul>
          </div>
        </div>
    </nav>
    <br>
    <br>

    <section class="container mt-5 text-center">

        <div class="bg-light shadow-lg">
            <form action="registrar.php" method="post">
                <h1> Registrarse</h1>
                <br>
                <p>Rut <input type="text"placeholder="" name="rut" > </p>
                <p>Contraseña <input type="password"placeholder="ingrese su contraseña" name="password" > </p>

                <input type="submit" value="Registrar">
            </form>
            <br>
        </div>
    </section>


    <!-- SECCION PIE DE PÁGINA -->
    <footer class="text-center text-md-right bg-dark text-white mb-1 fixed-bottom">
            <div class="container">
                <p class="m-0 py-3">Copyright &copy; 2022. Todos los derechos reservados. </p>
            </div>
    </footer>

    <!-- ARCHIVOS BOOTSTRAP JAVASCRIPT -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>