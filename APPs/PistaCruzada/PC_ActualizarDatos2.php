<?php
session_start();
$Codigo = $_SESSION['Codigo'];
include("../php/conexion_sql_server.php");
$Consulta = "Exec [dbo].[PC_EstadoPartida] '".$Codigo."'";
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);
while($row=sqlsrv_fetch_array($ejecutar)) 
{
    $CartasPendientes=$row[1];
    $CartasDescartadas=$row[2];
    $TiempoRestante=$row[0];
}


sqlsrv_close( $conn_sis);
?>

<h1 class="card-title" style="text-align:center"><?php {echo $CartasDescartadas;}?></h1>