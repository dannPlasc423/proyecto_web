<?php

$db_host="localhost";
$db_user="root";
$db_pasword="";
$db_name="formularioejemplo";

$con = mysqli_connect ($db_host, $db_user, $db_pasword, $db_name);

if(!$con){
    die("Error" . mysqli_connect_error());
}

$email = $_POST["correo"];
$contrasena = $_POST["password"];

$consulta = mysqli_query($con, "SELECT * from usuario where correo = '$email' && contrasena = '$contrasena'");

$rows = mysqli_num_rows($consulta);

if($rows = mysqli_fetch_array($consulta)){
    session_start();

    $_SESSION['usuario'] = $nombre;
    echo "<script>
    alert('Logeado correctamente');
    location.href = 'Inicio.html';
</script>";
}else{
    echo "<script>
    alert('Hay un error');
    location.href = 'login.html';
</script>";

}

mysqli_close($con);
?>