<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/PlantillaFont.css">
	<?php require_once "../php/script.php"; ?>
</head>

<body style="background-color:#C3C3C3;">

	<?php
  session_start();
  $Codigo = $_SESSION['Codigo'];
  $Participante = $_SESSION['Participante'];
?>

	<form action="TP_P_Votar.php" method="post">
		<div class="container overflow-hidden">
			<div class="col-12">
				<div class="p-5 border bg-secondary">
					<h2>Encuentra el TOPO</h2>
				</div>
			</div>
			<div class="p-5 border">
				<h4>Selecciona solo el numero de topos del la partida</h4>
				<?php
          include("../php/conexion_sql_server.php");
          $Consulta = "select ROW_NUMBER() OVER(ORDER BY Participante) ID ,Participante  from [dbo].[TP_participantes] where Codigo = '".$Codigo."'";
          //Exec [dbo].[TP_IniciarPartida] '".$Codigo."','".$Topos."'";
          $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
          while($row=sqlsrv_fetch_array($ejecutar)) 
          {
            echo '<div class="form-check">';
            echo '<input type="checkbox" class="form-check-input" name="selected[]" value="' . $row[1] . '">';
            echo '<label class="form-check-label" for="flexCheckChecked">'. $row[1] .'</label>';
            echo '</div>';
          }
          sqlsrv_close( $conn_sis);
        ?>
			</div>
			<!---------------------------------------------------------------->
			<div class="col-12">
				<div class="p-5 border bg-primary">
					<button type='submit' value="Save Selected" class="btn btn-block " name='Votar'>
						<h2>Ir a Votar</h2>
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
    $selected = $_POST['selected'];
    $data = implode(", ", $selected);
    include("../php/conexion_sql_server.php");
    $Consulta  = "Exec [dbo].[TP_VotarTopo] '".$Codigo."','".$Participante."', '".$data."','1'";
    $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
    while($row=sqlsrv_fetch_array($ejecutar)) 
    {
      if ($row['NumError']==0)
      {
        echo ' <script type="text/javascript"> alertify.success("'.$row[1].'");</script>';	
        $_SESSION['Codigo'] = $Codigo;
        $_SESSION['Participante'] = $Participante;
        //header('Location: TP_A_cierre.php');
      }
      else 
      {
        echo ' <script type="text/javascript"> alertify.error("'.$row[1].'");</script>';	
      }
    }
  }
  ?>



	</form>


</body>

</html>