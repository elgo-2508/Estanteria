<?php
    if(isset($_POST['IniciarJuego']))
    {	
        //session_start();
        $Codigo = $_SESSION['Codigo'];
        include("../php/conexion_sql_server.php");
        $Consulta = "Exec [dbo].[PC_IniciarPartida] '".$Codigo."'";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
        sqlsrv_close( $conn_sis);
    }
?>