<?php 
session_start();
$Codigo = $_SESSION['Codigo'];
include($_SERVER['DOCUMENT_ROOT']."/Estanteria/APPs/php/conexion_mysql.php");
$Consulta = "select max(PuntosTotales) maxpuntos 
(Select fase from dx_estado where codigo = '".$Codigo."')
from dx_participantes
where codigo = '".$Codigo."'";
$ejecutar = $conn_sis->query($Consulta);
while($row= $ejecutar->fetch_assoc()) 
{
  $MaxPuntaje=$row[maxpuntos];
  $Fase=$row[fase];
}
sqlsrv_close( $conn_sis);

if($MaxPuntaje>=30)
{
  $success = true;
  $message = "Juego Finalizado";
}else{
  $success = false;
  $message = "Juego no finalizado";
}

echo json_encode(array("success" => $success, "message" => $message, "Fase" => $Fase));
?>
