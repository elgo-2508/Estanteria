<?php 
{
	include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");	
	$Consulta = "select Codigo,Tipo,  FechaIni, Estado, Fase from juego";
	$ejecutar = $conn_sis->query($Consulta);
	$i=1;
	while($row= $ejecutar->fetch_assoc()) 
	{
?>
<!--Poblar Tabla-->
<tr>
	<td class="align-middle ps-3 name"><?php {echo $row['Codigo'];}?></td>
	<td class="align-middle ps-3 name"><?php {echo $row['Tipo'];}?></td>
	<td class="align-middle ps-3 name"><?php {echo $row['FechaIni'];}?></td>
	<td class="align-middle ps-3 name"><?php {echo $row['Estado'];}?></td>
	<td class="align-middle ps-3 name"><?php {echo $row['Fase'];}?></td>
	<td class="align-middle white-space-nowrap text-end pe-0">
		<div class="font-sans-serif btn-reveal-trigger position-static">
			<button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
				type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
				aria-expanded="false" data-bs-reference="parent"><svg class="svg-inline--fa fa-ellipsis fs--2"
					aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
					<path fill="currentColor"
						d="M120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200C94.93 200 120 225.1 120 256zM280 256C280 286.9 254.9 312 224 312C193.1 312 168 286.9 168 256C168 225.1 193.1 200 224 200C254.9 200 280 225.1 280 256zM328 256C328 225.1 353.1 200 384 200C414.9 200 440 225.1 440 256C440 286.9 414.9 312 384 312C353.1 312 328 286.9 328 256z">
					</path>
				</svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
			<div class="dropdown-menu dropdown-menu-end py-2" style="">
				<a class="dropdown-item"
					href="JuegoActivo.php?codigoPartida=<?php echo $row['Codigo']; ?>">Administrar</a>
				<a class="dropdown-item" href="#!">Ver</a>
				<a class="dropdown-item" href="#!">Cerrar</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item text-danger" href="#!">Eliminar</a>
			</div>
		</div>
	</td>
</tr>
<!--Fin Poblar Tabla-->

<?php    
			$i=$i+1;	
		}
			$conn_sis->close();
}
?>