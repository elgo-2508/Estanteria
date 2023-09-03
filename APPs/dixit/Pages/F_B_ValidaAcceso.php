<?php
	// Iniciar la sesión si aún no se ha iniciado
	ob_start();
	session_start();
	// Obtener el código del juego y el usuario de la sesión
	$codigoJuego = $_SESSION['Codigo'];
	$usuario = $_SESSION['Participante'];
	include("../../php/conexion_mysql.php");
	
	$Consulta = "call DX_Validar_Estado('".$codigoJuego."','".$usuario."');";
	$ejecutar = $conn_sis->query($Consulta);
	$i=1;
	while($row= $ejecutar->fetch_assoc()) 
	{
		$fase=$row['Fase'];
		switch ($fase) 
		{
			case '0': 
				header('Location: F_U_SalaEspera.php');
				break;
		
			case '1': 
				If ($row['Estado'] == '0')
				{
					If ($row['activo'] == '0')
					{
						header('Location: F_U_Observacion.php');
					}
					elseif ($row['activo'] == '1')
					{
						header('Location: F_U_Historiador.php');
					}
				}
				elseif ($row['Estado'] == '1')
				{
					header('Location: F_U_SalaEsperaF1.php');
				}
				break;
		

			case '2':
				If ($row['Estado'] == '0')
				{
					header('Location: F_U_Votacion.php');
				}
				elseif ($row['Estado'] == '1')
				{
					header('Location: F_U_SalaEsperaF2.php');
				}
				break;

				case '3':
					If ($row['Estado'] == '0')
					{
						header('Location: F_U_Puntuacion.php');
					}
					elseif ($row['Estado'] == '1')
					{
						header('Location: F_U_SalaEsperaF3.php');
					}
					break;
		}
		$i=$i+1;
	}		
	$conn_sis->close();
	exit;		
?>