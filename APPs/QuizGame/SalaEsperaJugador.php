<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    // Recibir datos del formulario
    session_start();
    $Codigo = 'ASDFG';//$_SESSION['Codigo'];
    $Participante = 'Elgo';//$_SESSION['Participante'];
    $_SESSION['usuario'] = $Participante;;
    $_SESSION['idCategoria'] = 9;
    $_SESSION['Pregunta'] = 3;    
    header("Location: jugarAnfitrion.php");
    exit;
    }

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
        </style>  
</head>
<body>
    <h1>Consulta de Usuarios</h1>
    <form method="post" action="SalaEsperaJugador.php">
        <button type="submit">Consultar</button>
    </form>
</body>
</html>



