<?php {

    session_start();
    $Codigo = $_SESSION['Codigo'];

    function getRandomPastelColor() {
        $r = mt_rand(150,255);
        $g = mt_rand(150,255);
        $b = mt_rand(150,255);
        return "rgb($r, $g, $b)";
      }
    
    include("../../php/conexion_sql_server.php");
    $Consulta = "Exec [dbo].[CargarParticipantes] '".$Codigo."'";
    $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
    while($row=sqlsrv_fetch_array($ejecutar)) {
        echo "<div class='col'>";
        echo "<div class='card mb-4 rounded-3 shadow-sm'>";
        $color = getRandomPastelColor();
        echo "<div class='p-2' style='background-color:$color;'>";echo $row['Participante'];echo "</div>";
        echo "</div>";
        echo "</div>"; 
    }
    sqlsrv_close( $conn_sis);

}?>