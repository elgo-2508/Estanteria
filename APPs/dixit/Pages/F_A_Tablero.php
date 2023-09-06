<?php 
	// Iniciar la sesión si aún no se ha iniciado
	session_start();
	ob_start();
	?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>Tablero</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<script src="../../../assets/js/config-1.js"></script>
	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<link rel="stylesheet" href="../../../assets/css/line.css"> <!-- Iconos -->
	<link href="../../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
	<!-- el mas impotante -->
	<link rel="stylesheet" href="../../../assets/css/PlantillaRotar.css">
	</style>

	<!-- ===============================================-->

</head>

<body>

	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">
		<?php require_once "F_B_Menu.php"; ?>
		<?php //require_once "BD_B_RetornaDatosF1.php"; 
		?>
		<!-- Inicio cuerpo-->
		<div class="content">
			<!-- Inicia el contenido-->
			<div class="row g-">
				<div class="col-12 col-xxl-3">
					<div class="mb-8">
							<div class="card-body ">
								<h2 class="mb-2">Dixit</h2>
								<h5 class="text-700 fw-semi-bold">A picture is whit a thousand words!</h5>
							</div>
							<hr class="hr" />
							<div class="card-body">
								<table class="table table-bordered">
									<thead>
											<tr class="table-secondary">
											<th scope="col">Ronda</th>
											<th scope="col">Fase</th>
											</tr>
									</thead>
									<tbody>
										<td>1</td>
										<td>1</td>
									</tbody>
								</table>
							</div>
							<hr class="hr" />
							<div class="card-body">
								<h4 class="mt-6" data-anchor="data-anchor" id="table-borders">Puntos</h4>
								<table class="table table-bordered">
									<thead>
											<tr class="table-secondary"> 
											<th scope="col">Jugador</th>
											<th scope="col">Puntos</th>
											</tr>
									</thead>
									<tbody>
										<tr>
											<td>Eduardo</td>
											<td>8</td>
										</tr>
										<tr>
											<td>Sammy</td>
											<td>10</td>
										</tr>
										<tr>
											<td>Laura</td>
											<td>9</td>
										</tr>
									</tbody>
								</table>								
							</div>
						</div>
				</div>		
				<div class="col-12 col-xxl-9">
					<h2 class="mb-2">Tablero</h2>
					<table cellspacing="0" cellpadding="0" style="width: 100%;" >
						<thead>
							<tr class="table-secondary"> 
								<td style="width: 20%; border: 1px solid #ccc;">Jugador</th>
								<td style="width: 80%; border: 1px solid #ccc;">barra</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Eduardo</td>
								<td>
									<div class="progress mb-3" style="height:15px">
										<div class="progress-bar bg-success" role="progressbar" style="width: 26.6%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>												
								</td>
							</tr>
							<tr>
								<td>laura</td>
								<td>
									<div class="progress mb-3" style="height:15px">
										<div class="progress-bar bg-info" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>												
								</td>
							</tr>
							<tr>
								<td>Sammy</td>
								<td>
									<div class="progress mb-3" style="height:15px">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
										</div>
									</div>												
								</td>
							</tr>								
						</tbody>							
					</table>
					<hr class="hr" />
					<div class="input-group input-group-lg">
						<span class="input-group-text" id="inputGroup-sizing-lg">Frase</span>
						<input  value="Aqui va la frase" class="form-control" type="text" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" for= />
					</div>
					<div class="card-container">
						<?php {
						include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
						$Consulta = "SELECT Tarjeta FROM dx_tjasinga WHERE Codigo = 'asdfg' and marcada = true and descartada = false";
						$ejecutar = $conn_sis->query($Consulta);
						$i=1;
						while($row= $ejecutar->fetch_assoc()) 
							{

							?>
							<!--section class="section1" id="section1"-->
							<div class="cardElgo">
								<div class="face front">
								<img src='/Estanteria/APPs/dixit/assets/img/originales/<?php echo $row['Tarjeta'];?>.jpg'> 
									<h3>Tarjeta 1</h3>
								</div>
								<div class="face back">
									<p>prueba</p>
									<p>Categoria: prueba</p>
									<p>prueba</p>
								</div>
							</div>
						<!--/section-->

						<?php    
						$i=$i+1;
						}		
						$conn_sis->close();

						}?>		
					</div>		
				</div>
			</div>		

			<!-- Inicia el contenido-->
			</form>
			<!-- finaliza el contenido-->
			<!--Pie de pagina-->
			<?php require_once "F_B_Footer.php"; ?>
			<!--Pie de pagina-->
		</div>
			<!-- FIN de cuerpo-->

	</main>
	<!-- ===============================================-->
	<!--    End of Main Content-->
	<!-- ===============================================-->


	<!-- ===============================================-->
	<!--    JavaScripts-->
	<!-- ===============================================-->
	<script src="../../../lib/popper/popper.min.js"></script><!-- Despliga notificaciones-->
	<script src="../../../lib/bootstrap/bootstrap.min.js"></script> <!-- colapsar menus-->
	<script src="../../../lib/fontawesome/all.min.js"></script> <!-- icono-->
	<script src="../../../lib/lodash/lodash.min.js"></script> <!-- paginacion -->
	<script src="../../../lib/feather-icons/feather.min.js"></script>
	<!-- visulizar iconos cuando se colapza el menu vertical -->
	<script src="../../../assets/js/phoenix.js"></script> <!-- funcionalidades del menu vertical -->
	<script src="../../../lib/list.js/list.min.js"></script> <!-- manejo de ordenamiento de tablas y busqueda -->
</body>
</html>