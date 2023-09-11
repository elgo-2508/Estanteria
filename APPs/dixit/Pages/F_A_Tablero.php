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
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
	<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/Admin/MD_B_menu.php"; ?>
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
							<div id="RecargarEstado"></div>
						</div>
						<hr class="hr" />
						<div class="card-body">
							<h4 class="mt-6" data-anchor="data-anchor" id="table-borders">Puntos</h4>
								<div id="RecargarPuntuacion"></div>
						</div>

						<hr class="hr" />
						<img class='me-3 bg-purple rounded shadow-sm"'   src='../../Admin/Temp/Codigo<?php {echo $Codigo;}?>.png' alt='' height='250'>
					</div>
				</div>
				<div class="col-12 col-xxl-9">
					<h2 class="mb-2">Tablero</h2>
					<div id="RecargarBarra"></div>
					<div class="card-container">
						<div id="RecargarTarjetas"></div>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="../../Librerias/js/funciones.js"></script>
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

<script type="text/javascript">
    $(document).ready
		(function()
			{
				setInterval
				(
					function ()
						{
							$('#RecargarEstado').load('Back/F_B_RetornarEstado.php');
							$('#RecargarPuntuacion').load('Back/F_B_RetornarPuntos.php');
							$('#RecargarBarra').load('Back/F_B_RetornarBarras.php');
							$('#RecargarTarjetas').load('Back/F_B_Retornartarjeta.php');
						}, 5000
				);
    	}
		);
</script>


			