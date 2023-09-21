<?php
session_start();
include("admin/funciones.php");
$confi = obtenerConfiguracion();
$totalPreguntasPorJuego = $confi['totalPreguntas'];
$IdPreguntaActual = $_SESSION['Pregunta'];
$EsCorrecta = $_SESSION['RespuestaActual'];
$preguntaActual = obtenerPreguntaPorId($IdPreguntaActual);
$_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];


?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado de Personas</title>
	<link rel="stylesheet" href="estilo.css">
	<!--link rel="stylesheet" href="estilo2.css"-->
	<link rel="stylesheet" href="prueba.css">
	
	<link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>
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
				<div class="opciones">
					<label for="respuesta1" >
						<p><?php echo $preguntaActual['opcion_a']?></p>
						<input type="radio" name="respuesta" value="A" id="respuesta1" required>
					</label>
					<label for="respuesta2"  >
						<p><?php echo $preguntaActual['opcion_b']?></p>
						<input type="radio" name="respuesta" value="B" id="respuesta2" required>
					</label>
					<label for="respuesta3"  >
						<p><?php echo $preguntaActual['opcion_c']?></p>
						<input type="radio" name="respuesta" value="C" id="respuesta3" required>
					</label>
				</div>
				<br>
		</div>
	</div>


	<?php
	if ($EsCorrecta == 'correcta')
	{
		echo '<div data-v-610cc016="" data-v-506f3506="" class="quiz-result-container correct animate__animated animate__slideInUp animate__faster show">';
		echo '<div data-v-610cc016="" class="quiz-result-info">';
		echo '<div data-v-610cc016="" class="quiz-result-marker">';
		echo '<img data-v-610cc016="" src="https://audience.ahaslides.com/img/correct.e762bdd8.png" alt="" width="63" height="67" class="quiz-result-symbol">';
		echo '<span data-v-610cc016="" class="quiz-result-number">1</span>';
		echo '</div>';
		echo '<div data-v-610cc016="" class="quiz-result-text">Genial!</div>';
		echo '<div data-v-610cc016="" class="quiz-result-point">';
		echo '<span data-v-610cc016="" class=""><b data-v-610cc016="">+ 10</b></span>';
	}
	else if ($EsCorrecta == 'Fallida')
	{
		echo '<div data-v-610cc016="" data-v-506f3506="" class="quiz-result-container incorrect animate__animated animate__slideInUp animate__faster show">';
		echo '<div data-v-610cc016="" class="quiz-result-info">';
		echo '<div data-v-610cc016="" class="quiz-result-marker">';		
		echo '<img data-v-610cc016="" src="https://audience.ahaslides.com/img/incorrect.b7ca3afd.png" alt="" width="63" height="67" class="quiz-result-symbol">';
		echo '<span data-v-610cc016="" class="quiz-result-number">1</span>';
		echo '</div>';
		echo '<div data-v-610cc016="" class="quiz-result-text">¡Inténtalo!</div>';
		echo '<div data-v-610cc016="" class="quiz-result-point">';
		echo '<span data-v-610cc016="" class=""><b data-v-610cc016="">+ 0</b></span>';
	}	
	else if ($EsCorrecta == 'FueraTiempo')
	{
		echo '<div data-v-610cc016="" data-v-506f3506="" class="quiz-result-container times-up animate__animated animate__slideInUp animate__faster show">';
		echo '<div data-v-610cc016="" class="quiz-result-info">';
		echo '<div data-v-610cc016="" class="quiz-result-marker">';		
		echo '<img data-v-610cc016="" src="https://audience.ahaslides.com/img/times-up.5cbd5b65.png" alt="" width="63" height="67" class="quiz-result-symbol">';
		echo '<span data-v-610cc016="" class="quiz-result-number">1</span>';
		echo '</div>';
		echo '<div data-v-610cc016="" class="quiz-result-text">¡El tiempo se acabo!</div>';
		echo '<div data-v-610cc016="" class="quiz-result-point">';
		echo '<span data-v-610cc016="" class=""><b data-v-610cc016="">+ 0</b></span>';
	}	
	?>
		</div>
	</div>
	

</body>
<script src="confetti-modes.js"></script>
<script src="../../lib/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

</html>

<script>  
document.addEventListener('DOMContentLoaded', function() {
    setInterval(actualizarEstado, 1000); // Llamar a actualizarEstado cada segundo
});

function actualizarEstado() {
    fetch('Back/SiguentePregunta.php')
        .then(response => response.json())
        .then(data => {
             if (data.estado == true) {
                window.location.href = 'jugarParticipante.php';
            }
        })
        .catch(error => console.error('Error:', error));
}
</script>