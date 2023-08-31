<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<?php require_once "../php/script.php"; ?> 
<link rel="stylesheet" href="../css/PlantillaRotarMini.css">
<link rel="stylesheet" href="../css/PlantillaFont.css">

</head>
<body>

<?php
  session_start();
  $Codigo =$_SESSION['Codigo'];
  $Participante =$_SESSION['Participante'] ;
?>	

<form method="POST" action="PC_tarjeta.php">

<h1>Pistas solicitadas</h1>
<?php require_once "PC_B_mostrarTarjetas.php"; ?>
</form>
<?php require_once "PC_GestionaTarjeta.php"; ?>
</body>
</html>

