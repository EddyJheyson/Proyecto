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
              <li class="nav-item"><a href="inicio.php" class="nav-link active">Inicio</a></li>
              <li class="nav-item"><a href="sesion.php" class="mx-3 nav-link active">Iniciar Sesion</a></li>
            </ul>
          </div>
        </div>
    </nav>

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
            <div class="p-1 bg-secondary text-white container">
                <h2>Contenido Relacionado</h2>
                <?php 
                $codigo = $row['id_asignatura'];
                $nom = $row["Nombre"];
                $sql = "SELECT * FROM proyecto.materia where id_asignatura=$codigo ";
                $productos = $conex->query($sql);

                foreach ($productos as $producto) { ?>

                    <div class="card-body">
                        <a class="btn btn-primary btn-lg" href="materia.php?id2=<?php echo $producto['id_materia'] ?>"> <?php echo $producto["Nombre"] ?> </a>
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

                <div class="card-body container bg-secondary mt-3">
                    <h4><?php echo $producto["ejercicios"] ?></h4>

                    <form id="formulario1" novalidate class="flex-column flex-md-row row col-6 container mx-auto" action="revisar.php" method="get">
                
                        <input type="hidden" name="id_ejer" id="id_ejer" value="<?php echo $producto["id_ejercicios"] ?>">

                        <!-- resultado -->
                        <div class="row form-group">
                            <label for="resul" class="col-form-label col-md-4">Resultado :</label>
                            <div class="col-md-8">
                                <input type="text" name="resul" id="resul" class="form-control" required>
                            </div>
                        </div>

                        <!-- boton -->
                        <div class="form-group row mb-0 col-sm-10 offset-sm-2">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>

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