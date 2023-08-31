<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once "../php/script.php"; ?> 
  <link rel="stylesheet" href="../css/PlantillaRotar.css">
  <style>
    .height25 {
      height: 25vh; /* Altura del botón es un cuarto de la altura de la pantalla */
    }
  </style>  
</head>
<body>

<?php
  session_start();
  $Codigo =$_SESSION['Codigo'];
  $Participante =$_SESSION['Participante'] ;
  $Pista = 'Tu eres el topo';
    // optiene el valor
  
  include("../php/conexion_sql_server.php");
  $Consulta = "Exec [dbo].[TP_Pista] '".$Codigo."','".$Participante."'";
  $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
  while($row=sqlsrv_fetch_array($ejecutar)) 
  {
      $Pista=$row[0];
  }

  sqlsrv_close( $conn_sis);
  
  ?>	

  <form method="POST" action="TP_P_tarjeta.php">
    <div class="container overflow-hidden">
      
        <div class="col-12">
          <div class="p-5 border bg-secondary">
            <h2>Identificando el TOPO</h2>
          </div>
        </div>
<!---------------------------------------------------------------->
        <!--section class="section2" id="section2"-->
          <div class="card">
            <div class="face front">
                <img src="img/Topo.png" alt="">
                <h3>PISTA</h3>
            </div>
            <div class="face back">
                <p>PISTA</p>
                <p>El valor seleccionado es:</p>
                <h3><?php Echo $Pista;?></h3>
                <div class="link">
                    <a href="#">Details</a>
                </div>
            </div>
          </div>
        <!--/section-->
<!---------------------------------------------------------------->
        <div class="col-12">
          <div class="p-5 border bg-primary">
            <button type='submit' class="btn btn-block " name='Votar'>
                <h2>Ir a Votar</h2>
            </button>
          </div>
        </div>
      
    </div>
  </form>

  <?php
    if(isset($_POST['Votar']))
    {	
      $_SESSION['Codigo'] = $Codigo;
      $_SESSION['Participante'] = $Participante;

      header('Location: TP_P_Votar.php');

    }
    
  ?>	


</body>
</html>