<?php
    session_start();
    //Si el usuario no esta logeado lo enviamos al index
    if (!$_SESSION["Participante"]) {
        header("Location:index.php");
    }
    include("admin/funciones.php");
    $confi = obtenerConfiguracion();
		$totalPreguntasPorJuego = $confi['totalPreguntas'];		
    $_SESSION['numPreguntaActual'] = 0;
    $IdPreguntaActual = $_SESSION['Pregunta'];
    $preguntaActual = obtenerPreguntaPorId($IdPreguntaActual);
    $_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>QUIZ GAME</title>
	<link rel="stylesheet" href="estilo.css">
	<script src="../../lib/bootstrap/bootstrap.min.js"></script>
	<link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">

</head>

<body>
	<div class="container-juego" id="container-juego">
		<header class="header">
			<div class="categoria">
				<?php echo obtenerNombreTema($preguntaActual['tema']) ?>
			</div>
			<a href="/Estanteria">Estanteria</a>
		</header>
		<div class="info">
			<div class="estadoPregunta">
				Pregunta <span class="numPregunta"><?php echo $_SESSION['numPreguntaActual'] + 1?></span> de
				<?php echo $totalPreguntasPorJuego ?>
			</div>
			<h3>
				<?php echo $preguntaActual['pregunta']?>
			</h3>
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
				<div class="opciones">
					<label for="respuesta1" onclick="seleccionar(this)" class="op1">
						<p><?php echo $preguntaActual['opcion_a']?></p>
						<input type="radio" name="respuesta" value="A" id="respuesta1" required>
					</label>
					<label for="respuesta2" onclick="seleccionar(this)" class="op2">
						<p><?php echo $preguntaActual['opcion_b']?></p>
						<input type="radio" name="respuesta" value="B" id="respuesta2" required>
					</label>
					<label for="respuesta3" onclick="seleccionar(this)" class="op3">
						<p><?php echo $preguntaActual['opcion_c']?></p>
						<input type="radio" name="respuesta" value="C" id="respuesta3" required>
					</label>
				</div>
				<br>
				<div class="progress" style="height:15px">
					<div class="progress-bar bg-warning 
					rounded-3" role="progressbar" style="width: 0%" aria-valuenow="25"
						aria-valuemin="0" aria-valuemax="100">0%</div>
				</div>
			</form>
		</div>
	</div>

</body>

</html>

<script src="juego.js"></script>

<script>
// Función para iniciar el contador
function iniciarContador() {
	var tiempoRestante = 60; // 60 segundos
	var intervalo = setInterval(function() {
		tiempoRestante--;
		// Actualizar el valor de aria-valuenow
		var progress = document.querySelector('.progress-bar');
		var porcentaje = ((60 - tiempoRestante) / 60) * 100;
		progress.style.width = porcentaje + "%";
		progress.textContent = Math.round(porcentaje) + "%";
		progress.setAttribute('aria-valuenow', Math.round(porcentaje));
		if (tiempoRestante <= 0) {
			clearInterval(intervalo);
			// Redirigir a otra página cuando el tiempo se agote
			window.location.href = 'Ranking.php';
		}
	}, 250); // Actualizar cada segundo
}
// Iniciar el contador cuando la página cargue
window.onload = iniciarContador;
</script>