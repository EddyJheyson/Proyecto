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

    $codigo = $_GET['id_ejer'];
    $resul = $_GET['resul'];

    $sql = "SELECT * FROM proyecto.ejercicios WHERE id_ejercicios=$codigo AND resultado = $resul";
    $query =mysqli_query($conex,$sql);
    $filas=mysqli_num_rows($query);

    if($filas){
        header("location:inicio.php");
    
    }else{
        header("Location:".$_SERVER[HTTP_REFERER]);
        
    }

    $conex->close();
    ?>
 
</body>
</html>
