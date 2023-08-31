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
<?php
{
    session_start();
    $Codigo = $_SESSION['Codigo'];
}?>

<form method="POST" action="PC_accion.php">    
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom text-bg-dark">
      <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="../Anfitrion/img/LogoSinFondo2.png" class="img-fluid" style="max-width: 40px">
        <span class="fs-3 text-white">Palabras Cruzadas - Codigo:<?php echo $Codigo?></span>
      </a>

      <ul class="nav nav-pills">
        <button type='submit' class="btn btn-warning btn-block height25" name='IniciarJuego'>Iniciar</button> 
        <li class="nav-item"><a href="../Anfitrion/PC_cierre.php" class="nav-link">Salir</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>



<div class="container">
    <!--h1>Palabras Cruzadas</h1>
    <button type='submit' class="btn btn-warning btn-block height25" name='IniciarJuego'>Iniciar</button-->  
        <div id="RecargarTabla"></div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="card mb-3" style="max-width: 320px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Back-card.jpg" class="img-fluid rounded-start mt-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <p class="card-text" style="text-align:center">Numero pendientes.</p>
                        <div id="RecargarDatos"></div>
                        <p class="card-text"><small class="text-muted">Cartas del mazo pendientes por tomar</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 320px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/Back-card.jpg" class="img-fluid rounded-start mt-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <p class="card-text" style="text-align:center">Numero Descartadas.</p>
                        <div id="RecargarDatos2"></div>
                        <p class="card-text"><small class="text-muted">Estas cartas no se identifico de manera adecuada la cordenada</small></p>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="card mb-3" style="max-width: 320px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/reloj-arena.gif" class="img-fluid rounded-start mt-5" alt="..."  ;>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" style="text-align:center">Tiempo Restante</p>
                            <div id="RecargarDatos3"></div>
                        </div>
                    </div>
                </div>
            </div>          
        </div>   



    <!--Fin Container-->
    </div>

</form>

<?php require_once "PC_iniciarInterval.php"; ?>
</body>

</html>

<script type="text/javascript">
    $(document).ready(function()
    {
        var intervalId = setInterval(function()
        {
            fetch('Back/ValidaCierre.php')
            .then(response => response.json())
            .then(data => {
                if(data.success)
                {
                clearInterval(intervalId);
                Swal.fire({
					title: 'El Juego ha finalizado',
					text: 'Se finalizo el tiempo de juego!',
					icon: 'warning',
					showCancelButton: false,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Deseo visualizar el resultado!'
				  }).then((result) => {
					if (result.isConfirmed) {
						window.location.href = "../Anfitrion/PC_cierre.php";
					}
				  });
                }else
                {
                $('#RecargarTabla').load('ActualizaTabla.php');
                $('#RecargarDatos').load('PC_ActualizarDatos.php');
                $('#RecargarDatos2').load('PC_ActualizarDatos2.php');
                $('#RecargarDatos3').load('PC_ActualizarDatos3.php');
                }
            });
        },1000);
    });
</script>

