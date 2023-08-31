<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/PlantillaFont.css">
  <?php require_once "../php/script.php"; ?> 
	<style>
		body {
			background-image: url("img/Esperar.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>  
</head>
<body >

<?php
  session_start();
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
            <h2 class="text-white bg-dark">Tu eres el asignado para identificar la palabra</h2>
          </div>
        <!---------------------------------------------------------------->
        <div class="container px-4 py-5" id="hanging-icons">
            <div >
            <button type='submit' class="btn btn-success" name="selected" class="btn btn-block"  name='Votar'>
                <h2>Validar Palabras</h2>
            </button>
            </div>
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





</body>
</html>