<?php
session_start();
$Codigo = $_SESSION['Codigo'];
include("../php/conexion_sql_server.php");
$Consulta = "Exec [dbo].[PC_RespuestaPartida] '".$Codigo."'";
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);
while($row=sqlsrv_fetch_array($ejecutar)) 
{
    $Nivel=$row[0];
    $texto=$row[1];

}


sqlsrv_close( $conn_sis);
?>


<h1 class="display-4 fst-italic"><?php {echo $Nivel;}?></h1>
<!--FRACASO	MEDIOCRE	BUENO	INCREÍBLE	-->
<p class="lead my-3"><?php {echo $texto;}?></p>
<p class="lead mb-0"><a href="PC_NuevoJuego.php" class="text-white fw-bold">Reiniciar</a></p>
