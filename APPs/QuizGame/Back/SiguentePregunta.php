<?php
session_start();
$Codigo = $_SESSION['Codigo'];
$Participante = $_SESSION['Participante'];
$idpregunta = $_SESSION['Pregunta'];
$Consulta = "select count(1) Siguente 
,(select preguntaActual from juego where `Codigo` = '".$Codigo."') preguntaActual
 from respuestas
 where codigo = '".$Codigo."'
 and `Participante` = '".$Participante."'
 and pregunta= ".$idpregunta."
 and estado = 0
 LIMIT 1;";
include ("../admin/conexion.php");	
$ejecutar = $conn->query($Consulta);			
$row = $ejecutar->fetch_assoc();
if ($row["Siguente"] == 1 ) {
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
