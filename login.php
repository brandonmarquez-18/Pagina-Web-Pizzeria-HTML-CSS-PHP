<script src=”js.js” language=”Javascript”></script>
<?php

include("conexion.php");





$id=$_POST["id"];
$contrasena=$_POST["contrasena"];

//login
if(isset($_POST["ingresar"])){
    $consulta=mysqli_query($conexion,"SELECT * FROM usuarios WHERE  id = '$id' AND contrasena = '$contrasena'");
    $usuarios = mysqli_num_rows($consulta);

    if($usuarios==1){
        echo"<script> alert('Bienvenido usuario # $id'); window.location='paginaPrincipal.php'</script>";
    }else{
        echo"<script> alert('El usuario no existe'); window.location='login.html'</script>";
    }
}

//registar
if(isset($_POST["registrar"])){
    $registar="INSERT INTO usuarios(id, contrasena) values ('$id','$contrasena')";
    if(mysqli_query($conexion,$registar)){
        echo"<script> alert('Usuario # $id  registrado con exito'); window.location='login.html'</script>";
    }else if($id and $contrasena == ""){
        
        echo"Error al insertar";
    }
}


?>
