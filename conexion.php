<?php
$dbname="usuarios";
$dbhost="localhost";
$dbpass="";
$dbuser="root";



$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conexion){
    die("Error de conexión".mysqli_connect_error());
}else{
    echo"conexión exitosa xd";
}



?>


