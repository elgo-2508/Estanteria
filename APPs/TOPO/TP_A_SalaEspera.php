<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--meta http-equiv="refresh" content="1"-->
    <title>Sala Espera Anfitrion</title>
    <?php require_once "../php/script.php"; ?>    
    <link rel="stylesheet" href="../css/PlantillaFont.css">     
    <?php require "../Librerias/phpqrcode/qrlib.php";?>   
</head>
<body style="background-color:#8D15D6;">
<div class="container">  
    <div class='row align-items-center g-lg-5 py-3'>
        <div class='col-lg-7 text-center col-md-10 mx-auto text-lg-start'>
            <img src="img/LogoSinFondo.png" class="img-fluid" style="max-width: 300px">
            <form class='p-4 p-md-4 border rounded-3 bg-light'>
                <div id="CargarParticipantes" class="row row-cols-1 row-cols-md-2 text-center"></div>
            </form>
        
        </div>
        
        <div class='col-lg-5 col-md-10 mx-auto '>
            <form method="POST" action="TP_A_SalaEspera.php">
                <p class='col-lg-10 fs-4'>Esperando Participantes</p>
                <?php      
                    session_start();
                    $Codigo = $_SESSION['Codigo'];
                    $IPServ = $_SESSION['IPServ'];
                    $dir = 'Temp/';
                    if (!file_exists($dir))
                        mkdir($dir);
                
                    $filename =$dir.'Codigo.png';
                    $tamano = 5;
                    $lever = 'M';
                    $frameSize = 3;
                    $contenido = 'http://'.$IPServ.'/GiraldGame/TOPO/TP_P_Ingreso.php?Codigo='.$Codigo.'';
                    QRcode::png($contenido,$filename,$lever,$tamano,$frameSize);                    
                ?>
                <h6 class="textoRaro"><?php {echo $Codigo;}?></h6>
                <img class='me-3 bg-purple rounded shadow-sm"' src='Temp/Codigo.png' alt='' height='250'>
                <button class='w-100 btn btn-lg btn-primary m-3' name='IniciarJuego' type='submit'>Iniciar Juego</button>
            </form>
        </div>
    </div>
</div>
<?php
	if(isset($_POST['IniciarJuego']))
	{	
		echo '<script type="text/javascript"> alertify.success("ingreso aqui");</script>';
		header('Location: TP_A_accion.php');
	}
?>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function(){
            setInterval(
                function () {
                    $('#CargarParticipantes').load('PC_B_CargarJugadores.php');
            }, 1000
            );
    });
</script>