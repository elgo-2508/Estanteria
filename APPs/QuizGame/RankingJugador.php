<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado de Personas</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="estilo2.css">
	<link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/tsparticles-confetti@2.12.0/tsparticles.confetti.bundle.min.js"></script>
</head>

<body>
	<h1>Rankin de personas</h1>
	<div class="contenedor">
		<img src="img/podium2.jpg" alt="Tu Imagen" width="600" height="450">
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
		</ul>
        </div>
	</div>


</body>
<script src="confetti-modes.js"></script>
<script src="../../lib/bootstrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

</html>



<script>
document.addEventListener("DOMContentLoaded", function() {
	const listaPersonas = document.getElementById("lista-personas");

	// Llama al archivo PHP para obtener las personas
	fetch('obtener_Podium.php')
		.then(response => response.json())
		.then(data => agregarPersonasConEfecto(data))
		.catch(error => console.error('Error:', error));

	// Función para agregar personas con efecto de aparición lenta
	function agregarPersonasConEfecto(personas) {
		personas.forEach((persona, index) => {
			setTimeout(() => {
				confetti({
					particleCount: 100,
					spread: 70,
					origin: {
						y: 0.6
					},
				});
				const li = document.createElement("li");
				li.textContent = persona;
				listaPersonas.appendChild(li);
				// Aplica el efecto de aparición lenta
				setTimeout(() => {
					li.style.opacity = 1;
					li.style.transform = "translateY(0)";
				}, 150 * index);
			}, 500 * index);
		});
	}
});
</script>



<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Aparición Lenta de Divs</title>
	<style>
	.hidden {
		display: none;
	}
	</style>
</head>

<body>


	<script>
	function mostrarDivs() {
		var divs = document.querySelectorAll('.hidden');
		var interval = 500; // Milisegundos entre cada aparición
		var delay = 0;

		divs.forEach(function(div) {
			setTimeout(function() {
				div.style.display = 'block';
			}, delay);
			delay += interval;
		});
	}

	window.onload = mostrarDivs;
	</script>

</body>

</html>

<script>  
document.addEventListener('DOMContentLoaded', function() {
    setInterval(actualizarEstado, 5000); // Llamar a actualizarEstado cada segundo
});

function actualizarEstado() {
    fetch('Back/validaInicio.php')
        .then(response => response.json())
        .then(data => {
            console.log("Hola, mundo!");
            
            if (data.estado == true) {
                window.location.href = 'jugarParticipante.php';
            }
        })
        .catch(error => console.error('Error:', error));
}
</script>