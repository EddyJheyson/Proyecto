<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/estilos.css">
    <title>Ingreso Contenido</title>

    <!-- Esta funcion nos sirve para confirmar los datos ingresados -->
    <script language="JavaScript">
        function pregunta() {
            return confirm('¿Confirma los datos?');
        }  
    </script>

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
              <li class="nav-item"><a href="inicio_admin.php" class="nav-link active">Inicio</a></li>
              <li class="nav-item"><a href="inicio.php" class="mx-3 nav-link active">Cerrar Sesion</a></li>
              <li class="nav-item mt-2"> <button class="bg-orange border-0 font-weight-bold"> Sesion Iniciada </button> </li>
            </ul>
          </div>
        </div>
      </nav>

    <section class="container py-5 mt-5">
        <h3 class="text-uppercase text-center">Formulario de Ejercicios</h3>

        <div class="card card-body text-light bg-secondary">
            <form id="formulario" novalidate class="flex-column flex-md-row row col-6 container mx-auto" action="ingreso_ejercicio.php" method="get" onsubmit="return pregunta()">
                
                <input type="hidden" name="id_con" value="<?php echo $_GET['id4'] ?>">

                <!-- nombre -->
                <div class="row form-group">
                    <label for="ejer" class="col-form-label col-md-4">Ejercicio:</label>
                    <div class="col-md-8">
                        <input type="text" name="ejer" id="ejer" class="form-control" placeholder="Ingrese el ejercicio..." required>
                    </div>
                </div>
    
                <!-- boton -->
                <div class="form-group row mb-0 col-sm-10 offset-sm-2">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>

       
    </section>
    

    <!-- SECCION PIE DE PÁGINA -->
    <footer class="mb-0 text-center text-md-right bg-dark text-white">
        <div class="container">
            <p class="m-0 py-3">Copyright © 2022. Todos los derechos reservados. </p>
        </div>
    </footer>

</body>
</html>