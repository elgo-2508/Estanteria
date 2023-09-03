<?php
	if(isset($_POST['insert']))
	{	
		include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");
		$Codigo = $_POST['Codigo'];
		$Participante = $_POST['Participante'];
		if($Codigo=="")
		{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar un código");</script>';
				return false;
		} 
		if($Participante=="")
		{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar un nombre de Participante");</script>';
				return false;
		}         
		$Consulta = "call TP_InscribirJuego  ('".$Codigo."', '".$Participante."');";
		$ejecutar = $conn_sis->query($Consulta);
		$i=1;
		while($row= $ejecutar->fetch_assoc()) 
		{
			if ($row['NumError'] == 0)
				{
				session_start();
				$_SESSION['Codigo']=$Codigo ;
				$_SESSION['Participante']=$Participante;
				header('Location: SalaJugador.php');
				exit;
				}
			if ($row['NumError'] != 0)
				{
						echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].'");</script>';	
				}                
			$i=$i+1;	
		}
		$conn_sis->close();
	}
	if(isset($_POST['reinsert']))
	{	
		include ($_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/php/conexion_mysql.php");
		$Codigo = $_POST['Codigo'];
		$Participante = $_POST['Participante'];
		if($Codigo=="")
		{
			echo ' <script type="text/javascript"> alertify.success("debes ingresar un código");</script>';
			return false;
		} 
		if($Participante=="")
		{
			echo ' <script type="text/javascript"> alertify.success("debes ingresar un nombre de Participante");</script>';
			return false;
		}         
		$Consulta = "call TP_InscribirJuego  ('".$Codigo."', '".$Participante."');";
		$ejecutar = $conn_sis->query($Consulta);
		$i=1;
		while($row= $ejecutar->fetch_assoc()) 
		{
			if ($row['NumError'] == 3)
					{
					session_start();
					$_SESSION['Codigo']=$Codigo ;
					$_SESSION['Participante']=$Participante;
					header('Location: SalaJugador.php');
					$conn_sis->close();
					exit;
					}
			if ($row['NumError'] = 2)
			{
					echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].'");</script>';	
			}                
			$i=$i+1;	
		}
		$conn_sis->close();
	}    
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Pagina para ingresar participantes a un Juego">
	<meta name="author" content="Eduardo Giraldo Galeano">
	<meta name="generator" content="VScode">
	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>Ingreso Game</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<script src="../../assets/js/config-1.js"></script>

	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<link rel="stylesheet" href="../../assets/css/line-1.css"> <!-- Iconos -->
	<link href="../../assets/css/theme.min-1.css" type="text/css" rel="stylesheet" id="style-default">
	<!-- el mas impotante -->
	<link rel="stylesheet" href="../../assets/css/PlantillaRotar.css">
	<!-- ===============================================-->

</head>

<body>
	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">
		<!-- Menu Vertical Y  HORIZONTAL-->
		<?php 
			require_once "MD_B_menu.php"; 
		?>
		<!-- FIN Menu Horizontal colabado y demas-->
		<!-- Inicio cuerpo-->
		<div class="content">
			<form method="POST" action="IngresoGame.php">
				<div class="container col-xl-10 col-xxl-8 px-4 py-5">
					<div class="row align-items-center g-lg-5 py-5">
						<div class="col-lg-7 text-center text-lg-start">
							<img class="me-3 bg-purple rounded shadow-sm" src="img/LogoSinFondo2.png" alt=""
								height="100">
							<h1 class="display-4 fw-bold lh-1 mb-3">Girald Games</h1>
							<p class="col-lg-10 fs-4">Aplicacion para juegos en familia</p>
						</div>
						<div class="col-md-10 mx-auto col-lg-5">
							<form class="p-4 p-md-5 border rounded-3 bg-light">
								<div class="form-floating mb-3">
									<input autocomplete="off" type="text" class="form-control" id="Codigo" name="Codigo"
										id="floatingInput">
									<label for="floatingInput">Codigo</label>
								</div>
								<div class="form-floating mb-3">
									<input autocomplete="off" type="text" class="form-control" name="Participante"
										id="floatingInput">
									<label for="floatingInput">Participante</label>
								</div>
								<button class="w-100 btn btn-lg btn-primary" name="insert"
									type="submit">Ingresar</button>
								<br> </br>
								<button class="w-100 btn btn-lg btn btn-secondary" name="reinsert"
									type="submit">re-Ingresar</button>
							</form>
						</div>

					</div>
				</div>
			</form>
			<!-- finaliza el contenido-->
			<!--Pie de pagina-->
			<footer class="footer position-absolute">
				<div class="row g-0 justify-content-between align-items-center h-100">
					<div class="col-12 col-sm-auto text-center">
						<p class="mb-0 mt-2 mt-sm-0 text-900">Gracias por crear con CodeIA<span
								class="d-none d-sm-inline-block"></span><span
								class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none">2023 &copy;<a
								class="mx-1" href="https://codeia.com.co/estanteria/">CodeIA</a></p>
					</div>
					<div class="col-12 col-sm-auto text-center">
						<p class="mb-0 text-600">v1.0.0</p>
					</div>
				</div>
			</footer>
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
	<script src="../../lib/popper/popper.min.js"></script><!-- Despliga notificaciones-->
	<script src="../../lib/bootstrap/bootstrap.min.js"></script> <!-- colapsar menus-->
	<script src="../../lib/fontawesome/all.min.js"></script> <!-- icono-->
	<script src="../../lib/lodash/lodash.min.js"></script> <!-- paginacion -->
	<script src="../../lib/feather-icons/feather.min.js"></script>
	<!-- visulizar iconos cuando se colapza el menu vertical -->
	<script src="../../assets/js/phoenix.js"></script> <!-- funcionalidades del menu vertical -->
	<script src="../../lib/list.js/list.min.js"></script> <!-- manejo de ordenamiento de tablas y busqueda -->
</body>

</html>


<script>
var params = new URLSearchParams(window.location.search);
document.getElementById("Codigo").value = params.get("Codigo");
</script>