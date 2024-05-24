<?php
$host="localhost";
$usu="root";
$pass="";
$db="candyland";
$conexion = mysqli_connect($host,$usu,$pass,$db);
if (!$conexion){
    echo "la conexion fallo.";
}else{
    echo "la conexion fue un exito"
}
?>
