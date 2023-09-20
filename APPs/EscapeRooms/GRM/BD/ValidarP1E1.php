<?php
session_start();
$nombreBoton = $_POST['nombreBoton'];
$DatoAValidar = $_POST['nombreInput'];
switch($nombreBoton) {
	case "ValidaE1P1":
			// Código a ejecutar si $opcion es igual a 1
			$Consulta = "select count(1) Estado from Pistas where E1P1 = '".$DatoAValidar."'";
			break;
	case "ValidaE1P2":
			// Código a ejecutar si $opcion es igual a 2
			$Consulta = "select count(1) Estado from Pistas where E1P2 = '".$DatoAValidar."'";
			break;
	case "ValidaE1P3":
			// Código a ejecutar si $opcion es igual a 3
			$Consulta = "select count(1) Estado from Pistas where E1P3 = '".$DatoAValidar."'";
			break;
			case "ValidaE1P5":
				// Código a ejecutar si $opcion es igual a 3
				$Consulta = "select count(1) Estado from Pistas where E1P5 = '".$DatoAValidar."'";
				break;			
				case "ValidaE1P6":
					// Código a ejecutar si $opcion es igual a 3
					$Consulta = "select count(1) Estado from Pistas where E1P6 = '".$DatoAValidar."'";
					break;							
	default:
			// Código a ejecutar si ninguna de las opciones anteriores se cumple
			$Consulta = "select True as Estado";
			break;
}
include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");	
$ejecutar = $conn_sis->query($Consulta);
$i=1;
$row = $ejecutar->fetch_assoc();
if ($row["Estado"] == true) {
	echo "✅";
} else {
	echo "❌";
}
$conn_sis->close();
?>
