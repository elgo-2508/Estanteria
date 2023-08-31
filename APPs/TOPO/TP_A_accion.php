<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../php/script.php"; ?>    
    <title>Document</title>
</head>
<body>
<form method="POST" action="TP_A_accion.php">   
<?php
{
    session_start();
    $Codigo = $_SESSION['Codigo'];
    $Topos = $_SESSION['Topos'];
}?>     
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom text-bg-dark">
      <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="../Anfitrion/img/LogoSinFondo2.png" class="img-fluid" style="max-width: 40px">
        <span class="fs-3 text-white">Encuentra el TOPO - <?php echo $Codigo; ?></span>
      </a>

      <ul class="nav nav-pills">
        <button type='submit' class="btn btn-warning btn-block height25" name='IniciarJuego'>Iniciar</button> 
        <li class="nav-item"><a href="TP_A_cierre.php" class="nav-link">Salir</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>




<div class="container">
    <!--h1>Palabras Cruzadas</h1>
    <button type='submit' class="btn btn-warning btn-block height25" name='IniciarJuego'>Iniciar</button-->  
        <?php require_once "PC_B_ActualizarTabla.php"; ?>
        
        <br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="card mb-3" style="max-width: 320px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Topo.png" class="img-fluid rounded-start mt-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <p class="card-text" style="text-align:center">Numero Topos en juego.</p>
                        <h1 class="card-title" style="text-align:center"><?php {echo $Topos;}?></h1>
                        <!--h1 class="card-title" style="text-align:center">2</h1-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 320px;">
            </div>     
            <div class="card mb-3" style="max-width: 320px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/reloj-arena.gif" class="img-fluid rounded-start mt-5" alt="..."  ;>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" style="text-align:center">Tiempo Restante</p>
                            <!--div id="RecargarDatos3"></div-->
                        </div>
                    </div>
                </div>
            </div>          
        </div>   



    <!--Fin Container-->
    </div>

</form>
<?php require_once "TP_B_iniciarTabla.php"; ?>

</body>

</html>
