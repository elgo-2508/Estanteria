<table class="table table-bordered">
	<thead>
		<tr class="table-secondary">
			<th scope="col">Jugador</th>
			<th scope="col">Estado</th>
		</tr>
	</thead>
	<tbody>
<?php
	session_start();
	$Codigo = $_SESSION['Codigo'];
	include($_SERVER['DOCUMENT_ROOT']."/Estanteria/APPs/php/conexion_mysql.php");
	$Consulta = "Select participante, Accion from dx_participantes where codigo = '".$Codigo."';";
	$ejecutar = $conn_sis->query($Consulta);
	while($row= $ejecutar->fetch_assoc()) 
	{
		echo("<tr>");
		echo('<td>'. $row['participante'] .'</td>');
		if ($row['Accion'] == true)
		{
			echo("<td>✅</td>");
		}
		else
		{
			echo("<td>❌</td>");
		}

		echo("</tr>");
	}
	$conn_sis->close();
?>
	</tbody>
</table>