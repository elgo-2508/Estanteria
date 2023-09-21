<?php
session_start();
$Codigo = $_SESSION['Codigo'];
$Consulta = "Select count(1) Iniciado, preguntaActual from juego where codigo ='".$Codigo."' and estado = 'Iniciado'";
include ("../admin/conexion.php");	
$ejecutar = $conn->query($Consulta);			
$row = $ejecutar->fetch_assoc();
if ($row["Iniciado"] == 1 ) {
	$Participante = $_SESSION['Participante'];
	$_SESSION['usuario'] = $Participante;;
	$_SESSION['idCategoria'] = 9;
	$_SESSION['Pregunta'] = $row["preguntaActual"];   
	echo json_encode(['estado' => 1]);
} else {
	echo json_encode(['estado' => 0]);
}
$conn->close();
?>
