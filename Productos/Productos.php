<?php
include 'conn.php';

if(isset($_POST["eliminar"])){
    $inser= "DELETE FROM productos WHERE id = " . $_POST["id"];

    $ir=mysqli_query($conn,$inser);
}else{
    
    $nombreproducto= $_POST['nombreproducto'];
    $precio= $_POST['precio'];
    $tipo= $_POST['tipo'];
    $imagen= $_POST['imagen'];
    
    
    $inser= "INSERT INTO productos (nombreproducto,  precio, tipo, imagen) VALUES ('$nombreproducto','$precio','$tipo','$imagen')";
    
    $ir=mysqli_query($conn,$inser);

    
}    

if($ir){
	header("Location: agregar.php");
}else{
    echo"hay un error";
}


?>