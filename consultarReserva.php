<?php
header("Access-Control-Allow-Origin: *");
include("conexion.php");

$sentencia = "select * from reserva";

$query = mysqli_query($conexion, $sentencia);

$cantidadRegistros = mysqli_num_rows($query);
if ($cantidadRegistros > 0) {
	$cadena='<table class="table">
<thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Placa</th>
      </tr>
    </thead>
    <tbody>';
	while ($row = mysqli_fetch_array($query)) {
		$cadena = $cadena."<tr>";
		$cadena = $cadena."<td>".$row["nombre"]."</td>";
		$cadena = $cadena."<td>".$row["apellidos"]."</td>";
		$cadena = $cadena."<td>".$row["placa"]."</td>";
		$cadena = $cadena."</tr>";
	}
	$cadena=$cadena."</tbody></table>";
	echo $cadena;
}else{
	echo "No hay registros";
}



mysqli_close($conexion);
?>