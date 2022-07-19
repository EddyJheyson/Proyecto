<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Materia</title>
</head>
<body>
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
              <li class="nav-item"><a href="inicio_admin.php" class="nav-link active">Inicio</a></li>
              <li class="nav-item"><a href="inicio.php" class="mx-3 nav-link active">Cerrar Sesion</a></li>
              <li class="nav-item mt-2"> <button class="bg-orange border-0 font-weight-bold"> Sesion Iniciada </button> </li>
            </ul>
          </div>
        </div>
    </nav>

    <section class="py-5 mt-3 container">
        <a href="ingreso1_ejercicio.php?id4=<?php echo $_GET['id2']?>"> <button type="button" class="btn btn-dark"> Ingresar Ejercicios </button>  </a>
    </section>

    <section class="mb-1 py-5 mt-3">
        
        <?php 
        include "conex.php";

        $codigo = $_GET['id2'];
        $sql = "SELECT * FROM proyecto.materia WHERE id_materia=$codigo ";
        $query =mysqli_query($conex,$sql); 
        $row =mysqli_fetch_array($query);
        ?>

        <div class="container-fluid d-flex">
            <div class="p-5 bg-primary col-10">
                <h2><?php echo $row["Nombre"] ?></h2>
                <p><?php echo $row["texto"] ?></p>
            </div>
            <div class="p-5 bg-secondary text-white col-2">
                <h2>Contenido Relacionado</h2>
                <?php 
                $codigo = $row['id_asignatura'];
                $sql = "SELECT * FROM proyecto.materia where id_asignatura=$codigo";
                $productos = $conex->query($sql);

                foreach ($productos as $producto) { ?>

                    <div class="card-body">
                        <h4><?php echo $producto["Nombre"] ?></h4>
                        <br>

                    </div>
                
                <?php }  
                ?>
            </div>
        </div>
        <div class="container-fluid py-2">
            <div class="p-5 bg-dark text-white">
                <h2>Ejercicios</h2>
                <?php 
                $codigo = $_GET['id2'];
                $sql = "SELECT * FROM proyecto.ejercicios where idmateria=$codigo";
                $productos = $conex->query($sql);

                foreach ($productos as $producto) { ?>

                <div class="card-body">
                    <h4><?php echo $producto["ejercicios"] ?></h4>

                </div>
                
                <?php }  
                ?>
            </div>
        </div>        

    </section>



    <!-- SECCION PIE DE PÁGINA -->
    <footer class="text-center text-md-right bg-dark text-white">
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