<?php
    if(isset($_POST['insert']))
    {	
        include("../php/conexion_sql_server.php");
        $Codigo = $_POST['Codigo'];
        $Participante = $_POST['Participante'];
        if($Codigo=="")
        {
            echo ' <script type="text/javascript"> alertify.success("debes ingresar un código");</script>';
            return false;
        } 
        if($Participante=="")
        {
            echo ' <script type="text/javascript"> alertify.success("debes ingresar un nombre de Participante");</script>';
            return false;
        }         
        $Consulta = "Exec [dbo].[JO_InscribirJuego] '".$Codigo."', '".$Participante."'";
        //$params = array();
        //$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
        while($row=sqlsrv_fetch_array($ejecutar)) 
        {
            if ($row['NumError'] == 0)
                {
                session_start();
                $_SESSION['Codigo']=$Codigo ;
                $_SESSION['Participante']=$Participante;
                header('Location: JO_P_salaJugador.php');
                }
            if ($row['NumError'] != 0)
            {
                echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].':ingreso");</script>';	
            }                
        }
        sqlsrv_close( $conn_sis);
    }
    if(isset($_POST['reinsert']))
    {	
        include("../php/conexion_sql_server.php");
        $Codigo = $_POST['Codigo'];
        $Participante = $_POST['Participante'];
        if($Codigo=="")
        {
            echo ' <script type="text/javascript"> alertify.success("debes ingresar un código");</script>';
            return false;
        } 
        if($Participante=="")
        {
            echo ' <script type="text/javascript"> alertify.success("debes ingresar un nombre de Participante");</script>';
            return false;
        }         
        $Consulta = "Exec [dbo].[TP_InscribirJuego] '".$Codigo."', '".$Participante."'";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
        while($row=sqlsrv_fetch_array($ejecutar)) 
        {
            if ($row['NumError'] == 3)
                {
                session_start();
                $_SESSION['Codigo']=$Codigo ;
                $_SESSION['Participante']=$Participante;
                header('Location: JO_P_salaJugador.php');
                }
            if ($row['NumError'] != 2)
            {
                echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].'");</script>';	
            }                
        }
        sqlsrv_close( $conn_sis);
    }    
?>