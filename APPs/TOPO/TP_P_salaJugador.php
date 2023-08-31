<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../php/script.php"; ?>    
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
	  $Codigo = $_SESSION['Codigo'];
    $Participante = $_SESSION['Participante'];
    ?>
    <div class="container">    
        <div class='row align-items-center g-lg-5 py-3'>
            <div class='col-lg-7 text-center text-lg-start'>
                <h1>Esperando el inicio de la partida</h1>
                <form method="POST" action="TP_P_salaJugador.php">
                    <h2>Participante</h2>
                    <h2><?php {echo $Participante;}?></h2>
                    <h2>El código de la partida es:</h2>
                    <h2><?php {echo $Codigo;}?></h2>
                    <button type='submit' class="btn btn-danger btn-block height25" name='CargarTablero'>
                    Iniciar
                    </button>
                </form>
            </div>
        </div>            
    </div>        

    <?php
    if(isset($_POST['CargarTablero']))
    {	
      include("../php/conexion_sql_server.php");
      $Consulta = "Exec [dbo].[TP_VerificarInicioPartida] '".$Codigo."'";
      $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
      while($row=sqlsrv_fetch_array($ejecutar)) 
      {
          if ($row['NumError']==0)
          {
            
            $_SESSION['Codigo'] = $Codigo;
            $_SESSION['Participante'] = $Participante;
            header('Location: TP_P_tarjeta.php');
          }
          else
          {
            echo ' <script type="text/javascript"> alertify.success("El juego no ha iniciado");</script>';
          }          
      }
      sqlsrv_close( $conn_sis);
    }
  ?>	    
</body>
</html>