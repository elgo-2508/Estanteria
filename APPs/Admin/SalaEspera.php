<?php
// Iniciar sesión
session_start();
if (!isset($_SESSION['usuario_id'])) {
	// Si no hay una sesión activa, redirigir a la página de inicio de sesión
	header('Location: ../Login/Login.php');
	exit();
}

//optengo ruta de inicio de juego, puede ser la pantalla de juego o la configuracion adicional
$Juego= $_SESSION['Game'] ;
$PathSalaEspera=$_SESSION['PathSalaEspera'];
$Codigo = $_SESSION['Codigo'];
$IPServ = $_SESSION['IPServ'];

include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
$Consulta = "Call CargarParticipantes ('".$Codigo."');";
$ejecutar = $conn_sis->query($Consulta);
$i=1;
while($row= $ejecutar->fetch_assoc())
{
		echo "<div class='col'>";
		echo "<div class='card mb-4 rounded-3 shadow-sm'>";
		//$color = getRandomPastelColor();
		$color = 'ffffff';
		echo "<div class='p-2' style='background-color:$color;'>";echo $row['Participante'];echo "</div>";
		echo "</div>";
		echo "</div>"; 
		$i=$i+1;
}		
$conn_sis->close();

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
	<title>Sala Espera</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->
	<script src="../../assets/js/config-1.js"></script>

    <?php require "../Librerias/phpqrcode/qrlib.php";?> 


	<!-- ===============================================-->
	<!--    Stylesheets-->
	<!-- ===============================================-->
	<link rel="stylesheet" href="../../assets/css/line-1.css"> <!-- Iconos -->
	<link href="../../assets/css/theme.min-1.css" type="text/css" rel="stylesheet" id="style-default">
	<!-- el mas impotante -->


	<!-- ===============================================-->

</head>

<body>
	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">
		<!-- Menu Vertical Y  HORIZONTAL-->
		<?php 
		require_once $_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/Admin/MD_B_menu.php"; 
		//require_once "../../templates/Menu/menu.php";
		?>
		
		<!-- FIN Menu Horizontal colabado y demas-->
		<!-- Inicio cuerpo-->
		<div class="content">
			<!-- Inicia el contenido-->
			<div class="pb-5">
				<div class="row g-6">
					<div class="row g-2">
						<div class="col-12 col-md-6">
							<div class="card h-100">
								<div class="card-body">
									<center>
										<img src="../../assets/img/icons/LogoSinFondo.png" class="img-fluid" 
										style="max-width: 300px">
										<h1><?php echo ($Juego);?></h1>
									</center>
									<form class='p-4 p-md-4 border rounded-3 bg-light'>
										<div id="CargarParticipantes" class="row row-cols-1 row-cols-md-2 text-center"></div>
									</form>							
								</div>	
							</div>	
						</div>	
						<div class="col-12 col-md-6">
							<div class="card h-100">
								<div class="card-body">
									<form method="POST" action="<?php echo($PathSalaEspera);?>">
									<center>
									<h3 >Esperando Participantes</h3>
									<?php      
											$dir = 'Temp/';
										if (!file_exists($dir))
												mkdir($dir);
											$filename =$dir.'Codigo'.$Codigo.'.png';
											$tamano = 5;
											$lever = 'M';
											$frameSize = 3;
											$contenido = 'http://'.$IPServ.'/Estanteria/APPs/Admin/IngresoGame.php?Codigo='.$Codigo.'';
											QRcode::png($contenido,$filename,$lever,$tamano,$frameSize);                    
									?>
									<h6 class="textoRaro"><?php {echo $Codigo;}?></h6>
									
										<img class='me-3 bg-purple rounded shadow-sm"'   src='Temp/Codigo<?php {echo $Codigo;}?>.png' alt='' 
										height='250'>
									<button class='w-100 btn btn-lg btn-primary m-3' name='IniciarJuego' type='submit'>
										Iniciar Juego
									</button>
									</center>
								</form>
										
								</div>	
							</div>	
						</div>	
					</div>
				</div>		
			</div>		



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
	<script src="../../lib/jquery-3.6.1.min.js"></script>
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

<script type="text/javascript">
    $(document).ready(function(){
            setInterval(
                function () {
                    $('#CargarParticipantes').load('CargarJugadores.php');
            }, 1000
            );
    });
</script>