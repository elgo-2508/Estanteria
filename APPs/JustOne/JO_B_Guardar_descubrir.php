<?php
{
    if(isset($_POST['Acierta']))
    {
        $Validacion = 1;
    }
    if(isset($_POST['Pasa']))
    {
        $Validacion = 2;
    }
    if(isset($_POST['Falla']))
    {
        $Validacion = 3;
    }

    session_start();
    $Codigo = $_SESSION['Codigo'];
    $Participante= $_SESSION['Participante'];
    $Pista = $_POST["new-word"];
    include("../php/conexion_sql_server.php");
    $Consulta = "Exec [dbo].[JO_GuardarDescubrir] '".$Participante."','".$Validacion."','".$Codigo."'";
    $ejecutar = sqlsrv_query ($conn_sis, $Consulta);

    while($row=sqlsrv_fetch_array($ejecutar)) 
    {
        if ($row['NumError'] == 0)
        {
        //session_start();
        $_SESSION['Codigo']=$Codigo ;
        $_SESSION['Participante']=$Participante;
        header('Location: JO_P_ValidarAccion.php');
        }
        else
        {
            echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].'");</script>';	
        }           
    }    

    sqlsrv_close( $conn_sis);
    }

?>
