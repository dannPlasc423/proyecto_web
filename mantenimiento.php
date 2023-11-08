<?php

include("conexion.php");
include("principal.php");

$codigo = $_POST["txtcodigo"];
$nombreproducto = $_POST["txtnombreproducto"];
$marca = $_POST["txtmarca"];
$precio = $_POST["txtprecio"];
if($codigo != "" && $nombreproducto != "" && $marca != ""  && $precio != ""){
				if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['grabardatos']))
				
				{
				$sqlgrabar = "INSERT INTO editarproductos(codigo, nombreproducto, marca, precio) values ('$codigo','$nombreproducto','$marca','$precio')";

			if(mysqli_query($conn,$sqlgrabar))
			{
				header("Location: principal.php");
			}else 
			{
				echo "Error: " .$sql."<br>".mysql_error($conn);
			}
					
					
				}
}else{
	echo "<script>
		alert('Algunos campos estan vacios, ingresalos de nuevo');
		
	</script>";
	

}




	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
	{
		header("Location: principal.php");
	}


	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
	
	{
			$sqlmodificar = "UPDATE editarproductos SET nombreproducto='$nombreproducto',marca='$marca',precio='$precio' WHERE codigo='$codigo'";

if(mysqli_query($conn,$sqlmodificar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}
	
	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
	{
			$sqleliminar = "DELETE FROM editarproductos WHERE codigo='$codigo'";
            echo $sqleliminar;

if(mysqli_query($conn,$sqleliminar))
{
	header("Location: principal.php");
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['buscarproducto']))
	
	{
		$search = "SELECT * FROM editarproductos WHERE codigo = '$codigo'";

if(mysqli_query($conn,$search))
{

	//Aqui es donde vas a actualizar la tabla

	header("Location: principal.php?cod=" . $codigo);
}else 
{
	echo "Error: " .$sql."<br>".mysqli_error($conn);
}
		
		
	}
	

?>