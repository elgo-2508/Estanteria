<?php
session_start();
$Codigo=$_SESSION['Codigo'];
include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
$Consulta = "Select Fase from Juego where codigo = '".$Codigo."' and fase ='iniciado';";
$ejecutar = $conn_sis->query($Consulta);
if ($ejecutar->num_rows > 0) {
		$_SESSION['usuario'] = $Participante;;
		$_SESSION['idCategoria'] = 'KnowGRM';
    echo "cumple_condicion";
} else {
    echo "no_cumple_condicion";
}
$conn_sis->close();
?>
