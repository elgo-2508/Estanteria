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
	<?php require_once "BD_B_RetornaDatosF1.php"; ?>
	<!-- Menu Vertical Y  HORIZONTAL-->
		<!-- FIN Menu Horizontal colabado y demas-->
		<!-- Inicio cuerpo-->
		<div class="content" style="background-image: url('../assets/img/Tablero/FondoTablero.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; width: 80%; height: 50%;">



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
			$Frase ="";
			require_once "BD_B_ActualizaSeleccion.php";
			header('Location: F_B_ValidaAcceso.php');
			exit;			
		}
	}
	?>
</body>
</html>