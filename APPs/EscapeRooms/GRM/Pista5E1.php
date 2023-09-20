<?php
if(isset($_POST['guardar'])) {
    // Obtener los valores del formulario
    // Realizar la inserción en la base de datos
    // ...
    // Redireccionar al usuario a la página anterior
    header("Location: SPE1.php");
    exit();
}
?>

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
				<?php require_once "BD/Gold.php"; ?> 				       
			</section>


        <section class="main-section">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-3 mb-9">
							<div class="col">
							</div>
							<div class="col">
								<h4 class="text-1100">Top secret E1</h4>
								<p class="mb-0 text-700">First component of top secret code.</p>
								<br>
								<img class="me-3 bg-purple rounded shadow-sm" src="img/TSE1.png" style="top: auto;width: 100%;height: auto;position: relative;">					
								<br>
								<div class="form-floating mb-2 py-3">
									<input autocomplete="off" type="text" class="form-control" name="Participante"
									id="floatingInput" maxlength="20"><span id="contador"></span>	
								</div>
								<button class="btn btn-secondary" id="Validar"  value="ValidaE1P5">Verificar</button>
								<button class="btn btn-secondary" id="Close"  value="Close">Close</button>
							</div>
							<div class="col">
							</div>	
						</div>       
        </section>

        <section class="right-section">
					<?php require_once "BD/ItemFound.php"; ?> 
        </section>
			</div>

			<footer>
        <!-- Contenido del footer, como información de contacto o enlaces adicionales -->
			<div class="contenedor">
				<center>
					<a href="SPE1.php">Close</a>
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
		document.getElementById('Validar').addEventListener('click', function() {
				// Hacer una solicitud al servidor para obtener el nuevo valor
				var nombreBoton = this.value; // Obtener el valor del botón
				var nombreInput  = document.getElementById('floatingInput').value; // Obtener el valor del input
            
            var data = new FormData();
            data.append('nombreBoton', nombreBoton);
						data.append('nombreInput', nombreInput);
						fetch('BD/ValidarP1E1.php', {
                method: 'POST',
                body: data
            })
						.then(response => response.text())
						.then(data => {
								document.getElementById('contador').textContent = data;
						});
		});
</script>

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

<script>
	document.getElementById('Close').addEventListener('click', function() {
		window.location.href = 'SPE1.php';
	});
</script>