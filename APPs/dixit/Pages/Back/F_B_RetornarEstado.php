<?php
	session_start();
	$Codigo = $_SESSION['Codigo'];
	include($_SERVER['DOCUMENT_ROOT']."/Estanteria/APPs/php/conexion_mysql.php");
	$Consulta = "Select Ronda, Fase from dx_estado where codigo = '".$Codigo."';";
	$ejecutar = $conn_sis->query($Consulta);
	while($row= $ejecutar->fetch_assoc()) 
	{
		$Ronda=$row['Ronda'];
		$Fase=$row['Fase'];
	}
	$conn_sis->close();
?>
<table class="table table-bordered">
	<thead>
		<tr class="table-secondary">
			<th scope="col">Ronda</th>
			<th scope="col">Fase</th>
		</tr>
	</thead>
	<tbody>
		<td><?php {echo $Ronda;}?></td>
		<td><?php {echo $Fase;}?></td>
	</tbody>
</table>