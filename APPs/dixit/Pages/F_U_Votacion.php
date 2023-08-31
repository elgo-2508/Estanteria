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
	<title>Observacion</title>

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
	<?php require_once "BD_B_RetornaDatosF1.php"; ?>
	<!-- Menu Vertical Y  HORIZONTAL-->
		<!-- FIN Menu Horizontal colabado y demas-->
		<!-- Inicio cuerpo-->
		<div class="content">
			<!-- Inicia el contenido-->
			<form method="post">
			<section class="py-2 text-center container">
				<div class="row py-lg-2">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h2 class="fw-light">Fase 2 - Votacion</h2>
					</div>
				</div>
			</section>
			<div class="card mb-4 rounded-3 shadow-sm">
				<div class="card-header py-3">
					<h4 class="my-0 fw-normal"><?php echo($Frase);?></h4>
				</div>			
			</div>			
			<div class="b-example-divider"></div>

			<!-- Inicia el contenido-->
			<div class="container mt-2">
				<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">

						<?php
				// Separar la variable en un array usando la coma como delimitador
				$Imagenes = explode(",", $tarjetas_list);
				$Selecionadas = explode(",", $Seleccion_list);
				
				$i=0;
				// Recorrer el array y imprimir cada código
				foreach ($Imagenes as $codigo) {
					$i=$i+1;
					if ($i==1) {
						echo '<div class="carousel-item active">';
					} else {
						echo '<div class="carousel-item">';
					}
					?>
						<div class="d-flex justify-content-center">
							<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
								<div class="col">
									<div class="card">
										<img src="..\assets\img\originales\<?php echo $codigo;?>.jpg"
											class="card-img-top" style="max-height: 450px; ; width: 300px;" alt="...">
										<div class="card-body">
											<div class="d-flex justify-content-between align-items-center">
												<div class="btn-group">
													<?php 
												echo '<button type="submit" class="btn btn-sm btn-outline-secondary" name="boton_seleccionado" value="' . $i . '">Select</button>';
												?>

												</div>
												
												<?php 
													echo "<h3>".$i."</h3>"
												?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php		
					}
					?>
				</div>
				<a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
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
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (isset($_POST["boton_seleccionado"])) 
		{
			$BotonSelecionado =$_POST["boton_seleccionado"];
			$datoEncontrado = $Imagenes[(int)$BotonSelecionado - 1];
			require_once "BD_B_ActualizaSeleccion.php";
			header('Location: F_B_ValidaAcceso.php');
			exit;			
		}
	}
	?>
</body>
</html>