<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Listado de Personas</title>
		<link rel="stylesheet" href="estilo.css">
		<link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
		
		<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f0f0f0;
			/* Color de fondo */
			text-align: center;
			/* Centra el contenido */
		}
		.contenedor {
			position: relative;
			/* Para posicionar la imagen de manera absoluta con respecto a este contenedor */
			display: inline-block;
			/* Hace que el contenedor solo tenga el tamaño del contenido */
		}
		.hidden {
			display: none;
		}
		img {
			max-width: 100%;
			/* Asegura que la imagen no sea más ancha que su contenedor */
			max-height: 100%;
			/* Asegura que la imagen no sea más alta que su contenedor */
		}

		h1 {
			color: #ffffff;
		}
			h3 {
			color: #ffffff;
		}

		ul {
			list-style: none;
			padding: 0;
			position: absolute;
			top: 40%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: rgba(0, 0, 0, 0.5);
			padding: 10px;
			border-radius: 5px;
			color: #ffffff;
					width: 600px;
		}

		li {
			margin: 5px 0;
		}
		</style>
		
	</head>

	<body>
		<form method="post" action="SiguentePregunta.php">
					<button class="btn btn-primary w-100" type="submit">Continuar</button>
		</form>
		<h1>Rankin de personas</h1>
		<div class="contenedor">
			<img src="img/Podium2.jpg" alt="Tu Imagen" width="600" height="450">
			<ul>
				<li>
									<div class="hidden" id="div3">
									<div class="row g-12">  
													<div class="col-12 col-lg-3">
															<div class="avatar avatar-xl">
																	<div class="avatar-name rounded-circle"><span>1</span></div>
															</div>
													</div>
													<div class="col-12 col-lg-6">
															<h3>Laura</h3>
													</div>
													<div class="col-12 col-lg-3">
													<h3>10p</h3>
													</div>
											</div>                    
					</div>
				</li>
				<li>
									<div class="hidden" id="div3">
									<div class="row g-12">  
													<div class="col-12 col-lg-3">
															<div class="avatar avatar-xl">
																	<div class="avatar-name rounded-circle"><span>2</span></div>
															</div>
													</div>
													<div class="col-12 col-lg-6">
															<h3>Elgo</h3>
													</div>
													

													<div class="col-12 col-lg-3">
													<h3>10p</h3>
													</div>
											</div>
					</div>
				</li>
				<li>
									<div class="hidden" id="div3">
									<div class="row g-12">  
													<div class="col-12 col-lg-3">
															<div class="avatar avatar-xl">
																	<div class="avatar-name rounded-circle"><span>3</span></div>
															</div>
													</div>
													<div class="col-12 col-lg-6">
															<h3>Jorge</h3>
													</div>

													<div class="col-12 col-lg-3">
															<h3>10p</h3>
													</div>
											</div>
					</div>
				</li>   
				<li>
									<div class="hidden" id="div3">
									<div class="row g-12">  
													<div class="col-12 col-lg-3">
															<div class="avatar avatar-xl">
																	<div class="avatar-name rounded-circle"><span>4</span></div>
															</div>
													</div>
													<div class="col-12 col-lg-6">
															<h3>Jorge</h3>
													</div>

													<div class="col-12 col-lg-3">
															<h3>10p</h3>
													</div>
											</div>
					</div>
				</li>    
				<li>
									<div class="hidden" id="div3">
									<div class="row g-12">  
													<div class="col-12 col-lg-3">
															<div class="avatar avatar-xl">
																	<div class="avatar-name rounded-circle"><span>5</span></div>
															</div>
													</div>
													<div class="col-12 col-lg-6">
															<h3>Jorge</h3>
													</div>

													<div class="col-12 col-lg-3">
															<h3>10p</h3>
													</div>
											</div>
					</div>
				</li>                                                 			
			</ul>
					</div>
		</div>
	</body>
	<script src="js/confetti.bundle.min.js"></script>
	<script src="../../lib/bootstrap/bootstrap.min.js"></script>
</html>

	<script>
		function mostrarDivs() {
			var divs = document.querySelectorAll('.hidden');
			var interval = 500; // Milisegundos entre cada aparición
			var delay = 0;

			divs.forEach(function(div) {
				setTimeout(function() {
					div.style.display = 'block';
					confetti({
						particleCount: 100,
						spread: 70,
						origin: {
							y: 0.6
						},
					});
				}, delay);
				delay += interval;
			});
		}
		window.onload = mostrarDivs;
	</script>

