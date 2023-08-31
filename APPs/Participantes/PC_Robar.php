<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php require_once "../php/script.php"; ?> 
  <link rel="stylesheet" href="../css/PlantillaRotar.css">
  <link rel="stylesheet" href="../css/PlantillaFont.css">
  

</head>
<body style="background-color:#C3C3C3;">

<?php
  session_start();
  $Codigo = $_SESSION['Codigo'];
  $Participante = $_SESSION['Participante'];
  $CartasDisponibles=$_SESSION['CartasDisponibles'];
?>	
        
<form method="POST" action="PC_Robar.php">
<div class="card">
        <div class="face front">
          <img src="../PistaCruzada/img/Back-card.jpg" alt="">  
        </div>
        <div class="face back">
          <h2>Cartas pendientes</h2>  
          <p class="textoRaroBig"><?php {echo $CartasDisponibles;}?></p>
          
        </div>
    </div>    

<section class="section1" id="section1" style="text-align: center;">
      <h6 class="textoRaro">Mazo</h6>
      <button type='submit' class="btn btn-danger btn-block" name='NewCard'>Robar</button>  
    </section>



</form>
<?php require_once "PC_GestionaRobar.php"; ?>

</body>
</html>
