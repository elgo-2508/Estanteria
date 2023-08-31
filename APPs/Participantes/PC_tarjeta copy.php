<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/PlantillaFont.css">
  <?php require_once "../php/script.php"; ?> 
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
  $CordenadaX =$_SESSION['CordenadaX'] ;
  $CordenadaY =$_SESSION['CordenadaY'] ;
  $Tarjeta =$_SESSION['Tarjeta'] ;
  $CartasDisponibles =$_SESSION['CartasDisponibles'] ;
?>	

<form method="POST" action="PC_tarjeta.php">
<div class="container-fluid bg-success">
    <button type='submit' class="btn btn-success btn-block height25" name='Aceptar'>
        Aprobada
    </button>
</div>

<div class="container-fluid">
    <h6 class="textoRaroBig"><?php {echo $Tarjeta;}?></h6>
</div>

<div class="container-fluid bg-danger">
<button type='submit' class="btn btn-danger btn-block height25" name='Rechazar'>
        Rechazar
    </button>
</div>

</form>
<?php require_once "PC_GestionaTarjeta.php"; ?>
</body>
</html>

