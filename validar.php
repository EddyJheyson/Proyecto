<?php

include "conex.php";

$USUARIO=$_POST['rut'];
$PASSWORD=$_POST['password'];


$consulta = "SELECT * FROM proyecto.iniciosesion where rut = '$USUARIO' and contraseña ='$PASSWORD' ";
$resultado= mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:inicio_admin.php");

}else{
    include("sesion.php");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conex);

?>