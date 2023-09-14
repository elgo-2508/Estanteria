<?php
	include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
	$Consulta = "SELECT participante as Podium FROM dx_participantes where codigo = '266cc7';";
	$ejecutar = $conn_sis->query($Consulta);
	$Podium = array();
	if ($ejecutar->num_rows > 0) {
			while($row = $ejecutar->fetch_assoc()) {
				$Podium[] = $row["Podium"];
			}
	}

	$conn_sis->close();

echo json_encode($Podium);
?>