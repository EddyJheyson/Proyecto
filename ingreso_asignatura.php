<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/estilos.css">
    <title>Ingresado</title>
</head>
<body class="bg-primary">
    <?php

    include "conex.php";

    $sql = "INSERT INTO proyecto.asignatura ( nombre)
    VALUES ('$_GET[nombre]')";

    if ($conex->query($sql) === TRUE){
        header("location:inicio_admin.php");
    }else{
        echo "Error: ". $sql . "<br>" . $conex->error;
    }

    $conex->close();
    ?>

    
    
</body>
</html>
