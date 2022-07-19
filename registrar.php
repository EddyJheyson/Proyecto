<?php

include "conex.php";

$USUARIO=$_POST['rut'];
$PASSWORD=$_POST['password'];

include "conex.php";

    $sql = "INSERT INTO proyecto.iniciosesion (rut, contraseña)
    VALUES ('$USUARIO', '$PASSWORD')";

    if ($conex->query($sql) === TRUE){
        header("location:sesion.php");
    }else{
        echo "Error: ". $sql . "<br>" . $conex->error;
    }

    $conex->close();

?>