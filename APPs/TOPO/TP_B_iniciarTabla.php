<?php
    if(isset($_POST['IniciarJuego']))
    {	
        //session_start();
        $Codigo = $_SESSION['Codigo'];
        $Topos = $_SESSION['Topos'];
        include("../php/conexion_sql_server.php");
        $Consulta = "Exec [dbo].[TP_IniciarPartida] '".$Codigo."','".$Topos."'";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);

        while($row=sqlsrv_fetch_array($ejecutar)) 
        {
            if ($row['NumError'] == 0)
            {
                echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';	
            }
            else
            {
                echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].'");</script>';	
            }
        }


        sqlsrv_close( $conn_sis);
    }
?>