<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require_once "../php/script.php"; ?>       
    <title>Document</title>
</head>
<body style="background-color:#C3C3C3;"> 
    <div class="container">    
        <div class='row align-items-center g-lg-5 py-3'>
            <div class='col-lg-12 text-center text-lg-start'>
                <div class="row g-0">
                    <div class="col p-2 d-flex flex-column position-static">
                        <img src="../Anfitrion/img/LogoSinFondo2.png" class="img-fluid" style="max-width: 40px">    
                    </div>
                    <div class="col-auto">
                    <h1>Nuevo Juego TOPO</h1>
                    </div>
                </div>            
                <form method="POST" action="TP_NuevoJuego.php">
                <div class="form-group">
                    <label for="tamaño"># Topos</label>
                    <input type="text" class="form-control" name="Topos" id="Topos" placeholder="Ingresa no topos">
                </div>
                <div class="form-group">
                    <label for="numeroJugadores">Número de jugadores</label>
                    <input type="text" class="form-control" name="numJugadores" id="numJugadores" placeholder="Ingresa el número de jugadores">
                </div>
                <div class="form-group">
                    <label for="numeroJugadores">IP Servidor</label>
                    <input type="text" class="form-control" name="IPServ" id="IPServ" value="192.168.1.8"  placeholder="Ingresa la ip del servidor">
                </div> 
                <br>
                <button type="submit" class="btn btn-primary" name="TP_NewGame" >Iniciar</button>

                </form>
                <?php require_once "TP_CargarNuevoJuego.PHP"; ?>
                <br>
                <?php require_once "../php/CheckList2.php"; ?>  
            </div>
        </div>

    </div>
</body>
</html>