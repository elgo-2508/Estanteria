<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5"> <!-- Refrescar la página cada 5 segundos -->
    <?php require_once "../php/script.php"; ?>    
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
	  $Codigo = $_SESSION['Codigo'];
    $Participante = $_SESSION['Participante'];
    include($_SERVER['DOCUMENT_ROOT'] ."/estanteria/APPs/php/conexion_mysql.php");
    $Consulta = "Call DX_Validar_Estado ('".$Codigo."', '".$Participante."');";
    $ejecutar = $conn_sis->query($Consulta);
    $i=1;
    $estado = 0; 
    while($row= $ejecutar->fetch_assoc())
      {
        if ($row['Fase']==null) 
        {
          $estado = 0; 
        }
        else
        {
          $estado = 1; // Si no se encuentra un estado, se asume 0
        }          
      }
    $conn_sis->close();    
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
    if ($estado == 1) {
      $_SESSION['Codigo']=$Codigo ;
      $_SESSION['Participante']= $Participante;
      header('Location: ..\dixit\Pages\F_B_ValidaAcceso.php');
    }
    ?>

    <?php
    if(isset($_POST['CargarTablero']))
    {	
			include($_SERVER['DOCUMENT_ROOT'] ."/estanteria/APPs/php/conexion_mysql.php");
			$Consulta = "Call ADM_VerificarInicioPartida ('".$Codigo."');";
      $ejecutar = $conn_sis->query($Consulta);
			$i=1;
			while($row= $ejecutar->fetch_assoc())
      {
          if ($row['NumError']==0)
          {
            $_SESSION['Codigo'] = $Codigo;
            $_SESSION['Participante'] = $Participante;

            //header('Location: '.$_SESSION['F_B_ValidaAcceso.php'].'');
            header('Location: F_B_ValidaAcceso.php');
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
