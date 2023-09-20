<?php
	session_start();
	$Pregunta = $_POST['pregunta'];
	$Consulta = "call SR_1_ValidarRespuesta ('ASDF','Elgo','".$Pregunta."')";
	include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");	
	$ejecutar = $conn_sis->query($Consulta);
	$row = $ejecutar->fetch_assoc();
	if ($row["Estado"] == true) {
		echo json_encode(['estado' => true, 'respuestaBD' => "Inception"]);
	} else {
		echo json_encode(['estado' => false, 'respuestaBD' => ""]);
	}
	$conn_sis->close();
?>
