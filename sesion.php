<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
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

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="images/user.png" >
                </div>
                <br>
                <form action="validar.php" class="col-12"  method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Rut" name="rut"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Contrasena" name="password"/>
                    </div>
                    <button type="submit" value=" ingresar " class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                </form>
                <br>

                <a href="registro.php"> <button type="submit" value=" registrar " class="btn btn-primary"> Registrarse </button> </a> 
                <br>  
        </div>
    </div>
    <br>
    <br>


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