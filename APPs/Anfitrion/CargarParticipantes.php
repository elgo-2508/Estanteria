<?php
{

    session_start();
    $Codigo = $_SESSION['Codigo'];

    include("../php/conexion_sql_server.php");
    $Consulta = "Exec [dbo].[CargarParticipantes] '".$Codigo."'";
    //$params = array();
    //$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $ejecutar = sqlsrv_query ($conn_sis, $Consulta);

    echo "<div class='row align-items-center g-lg-5 py-3'>";
    echo "<div class='col-lg-7 text-center text-lg-start'>";
    echo "<form class='p-4 p-md-4 border rounded-3 bg-light'>";
    echo "<div class='container overflow-hidden'>";
    echo "<div class='row gy-2'>";
    while($row=sqlsrv_fetch_array($ejecutar)) {
    echo "<div class='col-6'>";
    echo "<div class='p-2 border bg-light'>";echo $row['Participante'];echo "</div>";
    echo "</div>";
    }
    echo "</div>";
    echo "</div>";
    echo "</form>";               
    echo "</div>";
    echo "<div class='col-md-10 mx-auto col-lg-5'>";
    echo "<h1 class='display-4 fw-bold lh-1 mb-3'>".$Codigo."</h1>";
    echo "<p class='col-lg-10 fs-4'>Esperando Participantes</p>";
    echo "<img class='me-3 bg-purple rounded shadow-sm' src='Temp/Codigo.png' alt='' height='100'>";
    echo "<button class='w-100 btn btn-lg btn-primary' name='IniciarJuego' type='submit'>Iniciar Juego</button>";

    echo "</div>";
    echo "</div>";

    sqlsrv_close( $conn_sis);

}
?>	