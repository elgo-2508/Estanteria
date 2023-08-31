<?php
{
    include("../php/conexion_sql_server.php");
    $Consulta = "Exec [dbo].[CargarParticipantes] '078F82'";
    $ejecutar = sqlsrv_query ($conn_sis, $Consulta);


    



    while($row=sqlsrv_fetch_array($ejecutar)) {
    echo "<div class='col-6'>";
    echo "<div class='p-2 border bg-light'>";echo $row['Participante'];echo "</div>";
    echo "</div>";
    }
    


    sqlsrv_close( $conn_sis);

}
?>	