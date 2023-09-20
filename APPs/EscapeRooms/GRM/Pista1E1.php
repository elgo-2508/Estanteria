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
		<link rel="stylesheet" type="text/css" href="../../../lib/alertifyjs/css/alertify.css" >
		<link rel="stylesheet" type="text/css" href="../../../lib/alertifyjs/css/themes/default.css" >
		<link rel="stylesheet" type="text/css" href="../../../lib/bootstrap/css/bootstrap.min.css" >
		<link rel="stylesheet" href="stilo.css">
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
						<div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-4 g-3 mb-9">
							<div class="col">
							</div>
							<div class="col">
								<div class="card h-100 hover-actions-trigger">
									<div class="card-body">
										
										<h3 class="text-1100">Discover the movie.</h3>
										<h4>💤🛌🔒🔑🕶🎛</h4>
										<div class="form-floating mb-3">
											<input autocomplete="off" type="text" class="form-control" name="Participante"
											id="floatingInput" maxlength="20">
											<span id="contador"></span>	
										</div>
										<button class="btn btn-secondary" id="Validar"  value="ValidaE1P1">Check</button>
										<button class="btn btn-secondary" id="Close"  value="Close">Close</button>
										<div>
										<p>Do you need to use a clue?, for each one you use,the total time will be increased 5 minutes</p>
										<a href="#" onclick="MDE1P1P1()">Clue1</a>
										<a href="#" onclick="MDE1P1P2()">Clue2</a>
										<a href="#" onclick="MDE1P1P3()">Clue3</a>
										</div>
									</div>
								</div>
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
		<!-- Modal P1-->
		<div id="ModalE1P1P1" class="modal">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<span class="close" id="CMDE1P1P1">&times;</span>
				<h1>Pista 1</h1>
				<p>The main actor of this movie is Leonardo DiCaprio</p>
				
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
			</div>
		</div>	

		<!-- Modal P2-->
		<div id="ModalE1P1P2" class="modal">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<span class="close" id="CMDE1P1P2">&times;</span>
				<h1>Pista 2</h1>
				<p>The plot occurs in people's dreams</p>
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
			</div>
		</div>	

		<!-- Modal P3-->
		<div id="ModalE1P1P3" class="modal">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<span class="close" id="CMDE1P1P3">&times;</span>
				<h1>Pista 3</h1>
				<p>The movie's name is Inception</p>
				<!-- Aquí puedes incluir contenido PHP según tus necesidades -->
			</div>
		</div>			


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
	document.getElementById('Close').addEventListener('click', function() {
		window.location.href = 'SPE1.php';
	});
</script>


<script>
	// JavaScript para controlar el modal
	function MDE1P1P1() 	{
    document.getElementById('ModalE1P1P1').style.display = 'block';	}

	document.getElementById('CMDE1P1P1').addEventListener	('click', function() 
		{document.getElementById('ModalE1P1P1').style.display = 'none';	}	);

	window.onclick = function(event)	{
		if (event.target == document.getElementById('ModalE1P1P1')) 
		{document.getElementById('ModalE1P1P1').style.display = 'none';}}
</script>

<script>
	// JavaScript para controlar el modal
	function MDE1P1P2() 	{
    document.getElementById('ModalE1P1P2').style.display = 'block';	}

	document.getElementById('CMDE1P1P2').addEventListener	('click', function() 
		{document.getElementById('ModalE1P1P2').style.display = 'none';	}	);

	window.onclick = function(event)	{
		if (event.target == document.getElementById('ModalE1P1P2')) 
		{document.getElementById('ModalE1P1P2').style.display = 'none';}}
</script>

<script>
	// JavaScript para controlar el modal
	function MDE1P1P3() 	{
    document.getElementById('ModalE1P1P3').style.display = 'block';	}

	document.getElementById('CMDE1P1P3').addEventListener	('click', function() 
		{document.getElementById('ModalE1P1P3').style.display = 'none';	}	);

	window.onclick = function(event)	{
		if (event.target == document.getElementById('ModalE1P1P3')) 
		{document.getElementById('ModalE1P1P3').style.display = 'none';}}
</script>


<script>
	function ValidarPregunta() {
		var pregunta ='ValidaE1P1';
		var data = new FormData();
		data.append('pregunta', pregunta);
		fetch('BD/ValidarPregunta.php', {
			method: 'POST',
			body: data
		})
		.then(response => response.json())
		.then(data => {
			if (data.estado == 1) {
				document.getElementById('floatingInput').value = data.respuestaBD;
				document.getElementById('contador').textContent = "✅";
				document.addEventListener('DOMContentLoaded', function() {
				document.getElementById('Validar').disabled = true;
			});
			}
		});
	}

	window.onload = function() {
		ValidarPregunta(); // Llamar a la función al cargar la página
	}
</script>




