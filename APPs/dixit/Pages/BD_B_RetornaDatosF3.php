<?php 
	// Obtener el código del juego y el usuario de la sesión
	//session_start();
	$codigoJuego = $_SESSION['Codigo'];
	$usuario = $_SESSION['Participante'];

	include("../../php/conexion_mysql.php");
	$Consulta = "call dx_cargar_formulario_3('".$codigoJuego."','".$usuario."');";
	$ejecutar = $conn_sis->multi_query($Consulta);
	if ($ejecutar) 
	{
		$Resultado1 = $conn_sis->store_result();
		while($row= $Resultado1->fetch_assoc()) 
		{
			$tarjeta = $row['tarjeta'];
			$Frase = $row['Frase'];
		}
		$conn_sis->next_result(); 
		$Resultado2 = $conn_sis->store_result();
		while($row= $Resultado2->fetch_assoc()) 
		{
			$puntuacion[] = $row;
		}
	} else {
		echo "Error: " . $conn_sis->error;
	}
	$conn_sis->close();
?>