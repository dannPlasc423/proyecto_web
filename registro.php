<?php

include 'formulario.php';

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];

//Consulta//
$inser ="INSERT INTO usuario (id,nombre,correo,contrasena,telefono,sexo) values ('0', '$nombre','$correo', '$contrasena','$telefono','$sexo')";

$ir=mysqli_query($con,$inser);
if($ir){
    echo "Se ha registrado con exito";

}else{
    echo "Hay un error";
}

?>