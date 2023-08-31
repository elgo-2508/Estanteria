<?php 
	// Obtener el código del juego y el usuario de la sesión
	//session_start();
	$codigoJuego = $_SESSION['Codigo'];
	$usuario = $_SESSION['Participante'];

	include("../../php/conexion_mysql.php");
	$Consulta = "call dx_cargar_formulario_1('".$codigoJuego."','".$usuario."');";
	$ejecutar = $conn_sis->query($Consulta);
	$i=1;
	while($row= $ejecutar->fetch_assoc()) 
	{
		$tarjetas_list = $row['tarjetas_list'];
		$Accion = $row['Accion'];
		$Seleccion_list = $row['Seleccion_list'];
		$Frase = $row['Frase'];
	}
	$i=$i+1;
	$conn_sis->close();
?>