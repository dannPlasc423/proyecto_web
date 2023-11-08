<?php

include("conexion.php");

$codigo = $_POST["txtcodigo"];
$nombreproducto = $_POST["txtnombreproducto"];
$marca = $_POST["txtmarca"];
$precio = $_POST["txtprecio"];
$tipo = $_POST["txttipo"];
$cantidad = $_POST["txtcantidad"];

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
	
	{
	//$sqlgrabar = "INSERT INTO editarproductos (codigo, nombre, edad, telefono) values ('$cod','$nom','$edad','$tel')";

	$sqlgrabar = "INSERT INTO editarproductos (codigo, nombreproducto, marca, precio, tipo, cantidad) values ('$codigo','$nombreproducto','$marca','$precio','$tipo','$cantidad')";

if(mysqli_query($conn,$sqlgrabar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
			
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE editarproductos SET nombreproducto='$nombreproducto', marca='$marca', precio='$precio', tipo='$tipo', cantidad='$cantidad' WHERE codigo=$codigo";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM editarproductos WHERE codigo=$codigo";

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysql_error($conn);
}
		
		
	}

?>