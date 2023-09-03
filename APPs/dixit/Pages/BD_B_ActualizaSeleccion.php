<?php 
	include("../../php/conexion_mysql.php");
	$Consulta = "Call DX_SeleccionaTarjeta('".$datoEncontrado."','".$codigoJuego."','".$usuario."', '".$Frase."');";
	if ($conn_sis->query($Consulta) === TRUE) 
	{
		echo "registro actualizado: ";
	} 
	else 
	{
    echo "Error al actualizar el registro: " . $conn_sis->error;
	}
	// Cerrar conexión
	$conn_sis->close();
?>