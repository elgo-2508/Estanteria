<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <link rel="stylesheet" href="stilo.css">
		<link rel="stylesheet" type="text/css" href="../../../lib/bootstrap/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="../../../lib/alertifyjs/css/alertify.css" >
		<link rel="stylesheet" type="text/css" href="../../../lib/alertifyjs/css/themes/default.css" >

</head>
<body>

<header>
		<?php require_once "BD/Heder.php"; ?> 			
	</header> 

    <div class="main-content">
			<section class="left-section">
				<?php require_once "BD/Gold.php"; ?> 				       
			</section>


        <section class="main-section">
					
            <!-- Contenido principal -->
						<img src="img/Esenario3.jpg" alt="Tu Imagen" usemap="#enlaces">
								<a href="Pista1E3.php" style="position: absolute; top: 65%; left: 7%; width: 30px; height: 30px; border-radius: 50%; background-color: rgba(255, 0, 0, 0.5);"></a>
								<a href="Pista2E3.php" style="position: absolute; top: 46%; left: 34%; width: 30px; height: 30px; border-radius: 50%; background-color: rgba(255, 0, 0, 0.5);"></a>
								<a href="Pista3E3.php" style="position: absolute; top: 46%; left: 48%; width: 30px; height: 30px; border-radius: 50%; background-color: rgba(255, 0, 0, 0.5);"></a>								
								<a href="Pista4E3.php" style="position: absolute; top: 75%; left: 51%; width: 30px; height: 30px; border-radius: 50%; background-color: rgba(255, 0, 0, 0.5);"></a>			
        </section>

				<section class="right-section">
					<?php require_once "BD/ItemFound.php"; ?> 
        </section>
			</div>

			<footer>
			<div class="contenedor">
				<center>
					<a href="SPE2.php">⏪</a>
					scenarios
					<a href="SPE1.php">⏩</a>
				</center>
			</div>
    </footer>
	</body>
	<script src="../../../lib/jquery-3.6.1.min.js"></script>
	<script src="../../../lib/alertifyjs/alertify.js"></script>
	<script src="../../../lib/bootstrap/js/bootstrap.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>




<script>
	
	function openModal() {
    document.getElementById('myModal').style.display = 'block';
	}

	function closeModal() {
			document.getElementById('myModal').style.display = 'none';
	}

	window.onclick = function(event) {
			var modal = document.getElementById('myModal');
			if (event.target == modal) {
					modal.style.display = 'none';
			}
	}

</script>