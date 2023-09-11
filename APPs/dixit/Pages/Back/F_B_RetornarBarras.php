<style>
  th {
    background-color: grey;
    font-weight: bold;
  }
</style>
<table width="100%">
	<thead>
		<tr class="table-secondary">
			<td bgcolor="grey" style="width: 15%; border: 1px solid #ccc;">Jugador</th>
			<td bgcolor="grey" style="width: 55%; border: 1px solid #ccc;">Avance</th>
			<td bgcolor="grey" align='center' style="width: 15%; border: 1px solid #ccc;">puntos Ronda</th>
			<td bgcolor="grey" align='center' style="width: 15%; border: 1px solid #ccc;">Puntos Totales</th>
		</tr>
	</thead>
	<tbody>
<?php
	session_start();
	$Codigo = $_SESSION['Codigo'];
	include($_SERVER['DOCUMENT_ROOT']."/Estanteria/APPs/php/conexion_mysql.php");
	$Consulta = "Select participante,PuntosTotales, PuntoRonda, ROUND((PuntosTotales/30)*100, 0) Puntos ,(select frase from dx_estado WHERE  Codigo = '".$Codigo."') as frase from dx_participantes where codigo = '".$Codigo."';";
	$ejecutar = $conn_sis->query($Consulta);
	while($row= $ejecutar->fetch_assoc()) 
	{
		$frase = $row['frase'];
		echo("<tr>");
		echo("<td>".$row['participante']."</td>");
		echo("<td>");
		echo("<div class='progress mb-3' style='height:15px'>");
		echo('<div class="progress-bar bg-success" role="progressbar" style="width: '.$row['Puntos'].'%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">');
		echo("</td>");
		echo("<td align='center'>".$row['PuntoRonda']."</td>");
		echo("<td align='center'>".$row['PuntosTotales']."</td>");
		echo("</div>");
		echo("</div>");
		echo("</td>");
		echo("</tr>");
	}
	$conn_sis->close();
?>
	</tbody>
</table>

<hr class="hr" />
<div class="input-group input-group-lg">
	<span class="input-group-text" id="inputGroup-sizing-lg">Frase</span>
	<input value="<?php Echo $frase;?>" class="form-control" type="text"
		aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" for= />
</div>