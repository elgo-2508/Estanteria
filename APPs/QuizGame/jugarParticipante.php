<?php
session_start();
//Si el usuario no esta logeado lo enviamos al index
if (!$_SESSION['usuario']) {
    header("Location:index.php");
}

//Cargo las funciones del juego
include("admin/funciones.php");
$confi = obtenerConfiguracion();
$totalPreguntasPorJuego = $confi['totalPreguntas'];

//si realiza el boto
if(isset($_GET['siguiente']))
{//Ya esta jugando
    //Aumento 1 en las estadísticas
    aumentarRespondidas();
    //Controlar si la respuesta esta bien
    if($_SESSION['respuesta_correcta']==$_GET['respuesta'])
    {
        //ActualizaRespuesta($_SESSION['Participante']);
        $_SESSION['correctas'] = $_SESSION['correctas'] + 1;
        header("Location: Ranking.php");
				exit;
    }
		else
		{
			//ActualizaRespuesta($_SESSION['Participante']);
			$_SESSION['correctas'] = $_SESSION['correctas'] ;
			header("Location: Ranking.php");
			exit;
		}		
}
else
{   //inicia el formulario
    $_SESSION['numPreguntaActual'] = 0;
    $IdPreguntaActual = $_SESSION['Pregunta'];
    $preguntaActual = obtenerPreguntaPorId($IdPreguntaActual);
    $_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>QUIZ GAME</title>
	<link rel="stylesheet" href="estilo.css">
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
				<div class="boton">
					<input type="submit" value="Siguiente" name="siguiente">
				</div>
			</form>
		</div>
	</div>
	<script src="juego.js"></script>
</body>

</html>