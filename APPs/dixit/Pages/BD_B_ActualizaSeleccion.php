<?php 
	include("../../php/conexion_mysql.php");
	$Consulta = "Call DX_SeleccionaTarjeta('".$datoEncontrado."','".$codigoJuego."','".$usuario."', '".$Frase."');";
	if ($conn_sis->query($Consulta) === TRUE) 
	{
		echo "registro actualizado: ";
		// Redirigir a la nueva página después del procesamiento
		//header('Location: F_B_ValidaAcceso.php');
		//exit; // Asegurar que el script se detenga después de la redirección
	} 
	else 
	{
    echo "Error al actualizar el registro: " . $conn_sis->error;
	}
	// Cerrar conexión
	$conn_sis->close();
?>