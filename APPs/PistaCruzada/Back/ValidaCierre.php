<?php 

session_start();
$Codigo = $_SESSION['Codigo'];
include("../../php/conexion_sql_server.php");
$Consulta = "Exec [dbo].[PC_EstadoPartida] '".$Codigo."'";
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);
while($row=sqlsrv_fetch_array($ejecutar)) 
{
    $CartasPendientes=$row[1];
    $CartasDescartadas=$row[2];
    $TiempoRestante=$row[0];
}
sqlsrv_close( $conn_sis);

if($TiempoRestante==-1)
{
  $success = true;
  $message = "Proceso finalizado";
}else{
  $success = false;
  $message = "Proceso no finalizado";
}

echo json_encode(array("success" => $success, "message" => $message));


?>
