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
        <!-- Contenido del header, como el logo y la barra de navegación -->
        <h2>Girald-Games -  Captain One's Last Voyage</h2>
    </header>

    <div class="main-content">
        <section class="left-section">
					<h1>Bienvenido</h1>			       
			
        </section>


        <section class="main-section">
					<div class="video-container">
						<center>
						<video controls>
							<source src="img/introduction.mp4" type="video/mp4">
						</video>
						</center>
					</div>
        </section>

        <section class="right-section">
					<button class="btn btn-secondary" id="redirigir">Start the game</button>
        </section>
			</div>

    <footer>
			<div class="contenedor">
				<center><p>ScapeRoom</p></center>
			</div>
    </footer>
	</body>
	<script src="../../../lib/jquery-3.6.1.min.js"></script>
	<script src="../../../lib/alertifyjs/alertify.js"></script>
	<script src="../../../lib/bootstrap/js/bootstrap.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>


<script>
        document.getElementById('redirigir').addEventListener('click', function() {
            window.location.href = 'SPE1.php';
        });
    </script>