<?php {
	session_start();
	$Codigo = $_SESSION['Codigo'];
	include($_SERVER['DOCUMENT_ROOT'] ."/estanteria/APPs/php/conexion_mysql.php");
	$Consulta = "Call DX_IniciarPartida('".$Codigo."');";
	$ejecutar = $conn_sis->query($Consulta);
	if (!$ejecutar) {
		// Si ocurre un error al iniciar el juego
		if ($conn_sis->errno == 1644) { // Código de error correspondiente al SIGNAL '45000'
			$conn_sis->close();
			header("Location: ../../Admin/SalaEspera.php");
			exit();
		} else {
			echo "Error en la llamada al procedimiento almacenado: " . $conn->error;
		}
	} else {
		$conn_sis->close();
		header("Location: F_A_Tablero.php");
		exit();
	}
}?>