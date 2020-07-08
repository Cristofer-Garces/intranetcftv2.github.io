<?php
session_start();

$conexion=mysqli_connect('sql202.mipropia.com', 'mipc_26138896', '12341234', 'mipc_26138896_cftla') or die ("No se pudo conectar a la base de datos". mysqli_error($conexion));


	

$nombre = $_POST["usuario"];
$password = $_POST["clave"];

$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and clave = '".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1 &&  $_POST["usuario"] && $_POST["clave"])
{   
session_start();
$_SESSION["autentificado"]= "SI";
//Datos Correctos
header ("Location: ../home/home.php"); 
}else{ //datos incorrectos
header("Location: ../");
	 }

     ?>