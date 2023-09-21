<?php
 session_start();
 $usuario = $_SESSION['Participante'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="5">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="estilo.css">
        <title>Sala Espera</title>
        <style>
        body {
            color: #FFFFFF; /* Esto establece el color del texto en blanco */
        }
        
        .parpadeo span {
        font-size: 24px;
        animation: titilar 1s infinite alternate;
        }

        @keyframes titilar {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }
        </style>  
</head>
<body>
    
    <div class="container">
        <center>
        <img src="../../assets/img/icons/LogoSinFondo.png" class="img-fluid" style="max-width: 300px">
        <h2>Waiting for the others</h2>
        <h1><?php echo($usuario);?></h1>
        <div class="parpadeo">
            <span>get ready for the game</span>
        </div>
        <!-- Remplazar por mecanismo de soket o consulta en base de datos
        <form method="post" action="SalaEsperaJugador.php">
            <button type="submit">Consultar</button>
        </form>
        -->
        <center>
    </div>

</body>
</html>

<script>  
document.addEventListener('DOMContentLoaded', function() {
    setInterval(actualizarEstado, 1000); // Llamar a actualizarEstado cada segundo
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