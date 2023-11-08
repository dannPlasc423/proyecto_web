<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name= "formularioejemplo";

$con = mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$con){
    die("Error". mysqli_connect_error());

}
echo "conectado...";

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];

//Consulta//
$inser ="INSERT INTO usuario (id,nombre,correo,telefono,sexo) values ('0', '$nombre','$correo', '$contrasena','$telefono','$sexo')";

$ir=mysqli_query($con,$inser);
if($ir){
    echo "Se ha registrado con exito";

}else{
    echo "Hay un error";
}

?>