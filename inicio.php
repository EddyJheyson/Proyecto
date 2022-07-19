<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apprehendere</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/estilos.css">
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
          <li class="nav-item"><a href="sesion.php" class="nav-link active">Iniciar Sesion</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Seccion de Asignaturas -->
  <section class="py-5 mt-3">
    <div class="container">

     <?php 
        include "conex.php";

        $sql = "SELECT * FROM proyecto.asignatura";
        $productos = $conex->query($sql);

        foreach ($productos as $producto) { ?>
          
          <div class="jumbotron py-3">
            <hr class="my-2">
            <h1 class="d-sm-none"> <?php echo $producto["nombre"] ?> </h1>
            <h1 class="display-4 d-none d-sm-block text-center font-weight-bold"> <?php echo $producto["nombre"] ?> </h1> 
            <p class="lead text-center">
              <a class="btn btn-primary btn-lg" href="contenidos.php?id=<?php echo $producto['id_asignatura'] ?>"> ACCEDER</a>
            </p>
            <hr class="my-2">
          </div>

          <?php }  
        ?>
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