<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/PlantillaFont.css">
  <?php require_once "../php/script.php"; ?> 
  <?php  session_start(); ?> 
  <?php require_once "JO_B_CargarDatos.php"; ?> 
  <?php 
  if ($Acertadas > 6)
  {
    ?>    
    <style>
		body {
			background-image: url("img/Good.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>  
  <?php 
  }
  else 
  {
  ?>    
    <style>
    body {
      background-image: url("img/Bad.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>    
  <?php 
  }
  ?>  
  

</head>
<body >

<?php
  
  //session_start();
  $Codigo = $_SESSION['Codigo'];
  $Participante = $_SESSION['Participante'];
?>	
        
  <form action="JO_P_AsignadoEspera.php" method="post">
  <div class="container px-6 py-5" id="hanging-icons">
  </div>  
  <div class="container px-6 py-5" id="hanging-icons">
  </div>  
  <div class="container px-6 py-5" id="hanging-icons">
  </div>      
  <div class="container px-6 py-5" id="hanging-icons">
  </div>      
    <div class="container px-6 py-5" id="hanging-icons">
          <div >
          <h1 class="text-white bg-dark">Exelente
          <?php
              if ($Acertadas > 9)
              {echo "Exelente";}
              else if ($Acertadas > 6)
              {echo "Bueno";}
              else if ($Acertadas > 3)
              {echo "Mal";}
              else 
              {echo "Mediocre";}
          ?>            
            </h1>
            
            <h2 class="text-success bg-dark">Total tarjetas Acertadas: <?php {echo $Acertadas;}?></h2>
            <h2 class="text-danger bg-dark">Total tarjetas Descartadas: <?php {echo $Descartadas;}?></h2>
          </div>
    </div>  
    </form>

<!---------------------------------------------------------------->
<!--Evento Post-->
<!---------------------------------------------------------------->

  <?php
  if(isset($_POST['selected'])){
    // recuperar los registros seleccionados
    include("../php/conexion_sql_server.php");
    $Consulta = "Exec [dbo].[JO_EstadoJustOneXjugador] '".$Codigo."','".$Participante."'";
    $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
    while($row=sqlsrv_fetch_array($ejecutar)) 
    {
        if ($row['Estado'] == '3' and $row['Jugador'] == '0')
        {
          header('Location: JO_P_ValidarAccion.php');
        }    
        else 
        {
            echo ' <script type="text/javascript"> alertify.error("Sigue Pendiente la finalizacion de las palabras");</script>';	
        }
    }
  }
  ?>