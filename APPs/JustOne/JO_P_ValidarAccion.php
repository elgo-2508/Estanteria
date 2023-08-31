<?php
{
session_start();
$Codigo = $_SESSION['Codigo'] ;
$Participante = $_SESSION['Participante'];   

include("../php/conexion_sql_server.php");
$Consulta = "Exec [dbo].[JO_EstadoJustOneXjugador] '".$Codigo."','".$Participante."'";
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);
while($row=sqlsrv_fetch_array($ejecutar)) 
{
    if ($row['Estado'] == '1')
    {
        /*gestion abierta*/
        if ($row['Jugador'] == '1')
        {
            /*Pantalla informando que es el buscador*/
            header('Location: JO_P_AsignadoEspera.php');
        }       
        if ($row['Jugador'] == '0')
        {
            if ($row['EstJugador'] == '0')
            {   
                /*Pantalla para mostrar la palabra y permitir el digitacion de la pista*/
                $_SESSION['PalabraMisteriosa'] = $row['Palabra']; 
                $_SESSION['Participante'] = $Participante;
                header('Location: JO_P_Accion.php');
            }
            else 
            {
                header('Location: JO_P_Espera.php');
            }
        }        
    }
    if ($row['Estado'] == '2')
    {
        /*gestion Validar*/
        if ($row['Jugador'] == '1')
        {
            header('Location: JO_P_AsignadoEspera.php');
        }       
        if ($row['Jugador'] == '0')
        {
            if ($row['EstJugador'] == '0')
            {                  
                $_SESSION['PalabraMisteriosa'] = $row['Palabra']; 
                $_SESSION['Pal_Jugadores'] = $row['Pal_Jugadores']; 
                $_SESSION['Pal_Digita'] = $row['Pal_Digita']; 
                $_SESSION['Participante'] = $Participante;
                

                header('Location: JO_P_Validar.php');
            }
            else 
            {
                header('Location: JO_P_Espera.php');
            }                
        }             
    }
    if ($row['Estado'] == '3')
    {
        
        /*gestion Descubrir*/
        if ($row['Jugador'] == '0')
        {
            $_SESSION['PalabraMisteriosa'] = $row['Palabra']; 
            $_SESSION['Pal_Jugadores'] = $row['Pal_Jugadores']; 
            $_SESSION['Pal_Digita'] = $row['Pal_Digita']; 
            $_SESSION['Participante'] = $Participante;            
            header('Location: JO_P_Descubrir.php');
        }       
        if ($row['Jugador'] == '1')
        {
            header('Location: JO_P_Espera.php');
        }             
    }  
    if ($row['Estado'] == '4')
    {
        header('Location: JO_P_Resultado.php');        
    }
}    

sqlsrv_close( $conn_sis);
}
?>

