<?php
{
$Codigo = $_SESSION['Codigo'];
$Jugador = 'Pendiente Asignar';
$Pendientes = 0;
$Descartadas = 0;
$Acertadas = 0;
    
include("../php/conexion_sql_server.php");

$Consulta = "Exec [dbo].[JO_EstadoJustOne] '".$Codigo."'";
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);

while($row=sqlsrv_fetch_array($ejecutar)) 
{
    if ($row['Categoria'] == 'Jugador' )
    {
        $Jugador = $row['valor'];
    }
    if ($row['Categoria'] == 'Pendiente' )
    {
        $Pendientes = $row['valor'];
    }
    if ($row['Categoria'] == 'Acertada' )
    {
        $Acertadas = $row['valor'];
    }
    if ($row['Categoria'] == 'Descartada' )
    {
        $Descartadas = $row['valor'];
    }
    //$Pendientes = 6;//$row['Participante'];
    //$Descartadas = 5;//$row['Descartadas'];
    //$Acertadas = 3;//$row['Descartadas'];
    //$Jugador = 'Elgo'; //$row['Jugador'];
}    

sqlsrv_close( $conn_sis);
}
?>

