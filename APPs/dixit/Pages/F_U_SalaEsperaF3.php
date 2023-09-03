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
	<title>Puntuación</title>

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
	<?php require_once "BD_B_RetornaDatosF3.php"; ?>
	<!-- Menu Vertical Y  HORIZONTAL-->
		<!-- FIN Menu Horizontal colabado y demas-->
		<!-- Inicio cuerpo-->
		<div class="content">
			<!-- Inicia el contenido-->
			<form method="post">
                <section class="py-2 text-center container">
                    <div class="row py-lg-2">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h2 class="fw-light">Fase 3 - Espera</h2>
                        </div>
                    </div>
                </section>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal"><?php echo($Frase);?></h4>
                    </div>			
                </div>	
                
                <div class="cardElgo">
                    <div class="face front">
                    <img src="..\assets\img\originales\<?php echo $tarjeta;?>.jpg"; class="card-img-top" style="max-height: 450px; ; width: 300px;" alt="...">
                    </div>
                    <div class="face back">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Participante</th>
                            <th scope="col">Puntuación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i=1;
                                foreach ($puntuacion as $data) {
                                echo "<th scope='row'>".$i."</th>";
                                echo "<td>" . $data['participante'] . "</td>";
                                echo "<td>" . $data['PuntosTotales'] . "</td>";
                                echo "</tr>";
                                $i=$i+1;
                                }           
                            ?>
                        </tbody>
                        </table>
                    </div>
                </div>
								<div class="spinner-border spinner-border-sm" role="status">
									<span class="visually-hidden">Loading...</span>
								</div>
								<div class="spinner-border" role="status">
									<span class="visually-hidden">Loading...</span>
								</div>
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

<script>
	// Función para redirigir al otro formulario
	function redireccionar() {
		// Cambia la URL por la del otro formulario
		window.location.href = 'F_B_ValidaAcceso.php';
	}
	// Ejecutar la función cada 2 segundos
	setInterval(redireccionar, 2000); // 2000 milisegundos = 2 segundos
</script>