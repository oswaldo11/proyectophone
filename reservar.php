<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$placa = $_POST["placa"];

$sentencia = "insert into reserva(nombre, apellidos, cedula, placa) values('".$nombre."', '".$apellidos."', '".$cedula."', '".$placa."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
	echo "Se creó la reserva del carro: ".$placa;
}else{
	echo "No fue posible crear la reserva";
}

mysqli_close($conexion);
?>
