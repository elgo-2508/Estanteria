<?php
	session_start();
	$nombreBoton = $_POST['nombreBoton'];
	$DatoAValidar = $_POST['nombreInput'];
	$Consulta = "call SR_1_ValidarPreguntas ('ASDF','Elgo','".$DatoAValidar."','".$nombreBoton."')";
	include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");	
	$ejecutar = $conn_sis->query($Consulta);
	$row = $ejecutar->fetch_assoc();
	if ($row["Estado"] == true) {
		echo "✅";
	} else {
		echo "❌";
	}
	$conn_sis->close();
?>
