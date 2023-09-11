<?php
session_start();
// session_destroy();

include("admin/funciones.php");

aumentarVisita();

$categorias =  obtenerCategorias();

if(isset($_GET['idCategoria'])){
    session_start();
    $_SESSION['usuario'] = "Admin";
    $_SESSION['idCategoria'] = $_GET['idCategoria'];
    header("Location: jugar.php");
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
    </head>
    <body>
        <?php
        ob_start();
        session_start();
        $Codigo = $_SESSION['Codigo'];
        $Participante = $_SESSION['Participante'];
        include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
        $Consulta = "Select Fase from Juego where codigo = '".$Codigo."';";
        $ejecutar = $conn_sis->query($Consulta);
        $i=1;
        $estado = 0; 
        while($row= $ejecutar->fetch_assoc())
        {
            if ($row['Fase']=='Iniciado') 
            {
            $estado = 0; 
            }
            else
            {
            $estado = 1; // Si no se encuentra un estado, se asume 0
            }          
        }
        $conn_sis->close();    
        ?>

        <div class="container" id="cantainer">
            <div class='row align-items-center g-lg-5 py-3'>
                <div class='col-lg-7 text-center text-lg-start'>
                    <h1>Esperando el inicio de la partida</h1>
                    <h2>Participante:</h2>
                    <h2><?php {echo $Participante;}?></h2>
                    <h2>El código de la partida es:</h2>
                    <h2><?php {echo $Codigo;}?></h2>
                </div>
            </div>
        </div>
        <?php
        if ($estado == 1) 
        {
            $_SESSION['usuario'] = $Participante;;
            $_SESSION['idCategoria'] = 'KnowGRM';
            header("Location: jugar.php");
        }
        ?>        
    </body>
</html>

<script>
    // Función que se ejecutará cada segundo
    function verificarCondicion() {
        // Realizar una petición AJAX para verificar la condición en la base de datos
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText == "cumple_condicion") {
                    // Si la condición se cumple, redirige a otra página
                    window.location.href = 'jugar.php';
                }
            }
        };
        xhttp.open("GET", "ValidoIngreso.php", true);
        xhttp.send();
    }

    // Iniciar la verificación cada segundo
    setInterval(verificarCondicion, 1000);
</script>