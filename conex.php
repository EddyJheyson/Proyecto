<?php 

$conex =  new mysqli("localhost","root","");


if ($conex->connect_error){
    die("Conexion fallida: " . $conex->connect_error);
}else{
    print '<script language="JavaScript">';
    print 'alert("Conexion establecida con la base de datos");';
    print '</script>';
}

?>