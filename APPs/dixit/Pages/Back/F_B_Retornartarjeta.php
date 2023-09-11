<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-3 mb-9">

<?php {
	session_start();
	$Codigo = $_SESSION['Codigo'];
	include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
	$Consulta = 
	"
		SELECT tarjeta as Tarjeta, 
		CASE 
        WHEN fase = 2 THEN orden
        WHEN fase > 2 THEN asignacion
    END AS Texto 
		FROM dx_tjasinga , dx_estado 
		WHERE dx_tjasinga.Codigo = '".$Codigo."'
		and dx_tjasinga.codigo = dx_estado.codigo
		and dx_tjasinga.ronda = dx_estado.ronda
		and dx_estado.fase > 1
		order by dx_tjasinga.orden
	";
	$ejecutar = $conn_sis->query($Consulta);
	$i=1;
	while($row= $ejecutar->fetch_assoc()) 
		{

		?>
	<!--section class="section1" id="section1"-->
	<div class="col">
		<div class="cardElgo">
			<div class="face front">
				<img
					src='/Estanteria/APPs/dixit/assets/img/originales/<?php echo $row['Tarjeta'];?>.jpg'>
				<h3><?php echo $row['Texto'];?></h3>
			</div>
			<div class="face back">
				<p>prueba</p>
				<p>Categoria: prueba</p>
				<p>prueba</p>
			</div>
		</div>
	</div>
	<!--/section-->

	<?php    
	$i=$i+1;
	}		
	$conn_sis->close();

	}?>
	</div>