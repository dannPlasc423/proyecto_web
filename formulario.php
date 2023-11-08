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

?>