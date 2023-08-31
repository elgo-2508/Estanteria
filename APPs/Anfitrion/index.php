<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trajeta 3d con efecto flip</title>
	   <?php require_once "../php/script.php"; ?> 
  	<link rel="stylesheet" href="../css/PlantillaRotar.css">

	<style>
		body {
			background-image: url("img/FondoGame.png");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>

</head>
<body>
	<div class="container overflow-hidden">
		
		<div class="col-lg-10  col-md-12"></div>
			<div class="row g-0">
				<div class="col p-2 d-flex flex-column position-static">
					<img src="../Anfitrion/img/LogoSinFondo2.png" class="img-fluid" style="max-width: 100px">    
				</div>
				<div class="col p-5 d-flex flex-column position-static">
					<h1 class="text-warning">Girald Games</h1>
				</div>
			</div>
		</div>
<!---------------------------------------------------------------->
        <!--section class="section1" id="section1"-->
		<div class="card">
            <div class="face front">
                <img src="img/1.jpg" alt="">
                <h3>Pistas Cruzadas</h3>
            </div>
            <div class="face back">
                <p>Pistas Cruzadas</p>
                <p>Ctegoria: Coperativo</p>
                <p>Juego cooperativo para identificar las coordenadas de una palabra.</p>
                <div class="link">
					<a bg-dark href="PC_NuevoJuego.php"><span class="badge rounded-pill bg-warning text-dark">Cargar Juego</span></a>							
                </div>
            </div>
          </div>
        <!--/section-->
<!---------------------------------------------------------------->
        <!--section class="section2" id="section2"-->
		<div class="card">
            <div class="face front">
                <img src="img/2.jpg" alt="">
                <h3>TOPO</h3>
            </div>
            <div class="face back">
                <p>TOPO</p>
                <p>Ctegoria: Roles Ocultos</p>
                <p>Juego donde exiten topos que desconocen las palabras y deberan simular que conocen la palabra</p>
                <div class="link">
					<a bg-dark href="../TOPO/TP_NuevoJuego.php"><span class="badge rounded-pill bg-warning text-dark">Cargar Juego</span></a>							
                </div>
            </div>
          </div>
        <!--/section-->
<!---------------------------------------------------------------->
        <!--section class="section2" id="section2"-->
		<div class="card">
            <div class="face front">
                <img src="img/3.jpg" alt="">
                <h3>JUST ONE</h3>
            </div>
            <div class="face back">
                <p>JUST ONE</p>
                <p>Ctegoria: Coperativo</p>
                <p>Juego cooperativo para dar a identificar al compañero mediante pistas cual es la palabra escondida.</p>
                <div class="link">
					<a bg-dark href="../JustOne/JO_NuevoJuego.php"><span class="badge rounded-pill bg-warning text-dark">Cargar Juego</span></a>							
                </div>
            </div>
          </div>
        <!--/section-->
<!---------------------------------------------------------------->		
	</div>


</body>
</html>