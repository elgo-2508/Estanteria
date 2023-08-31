<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "../php/script.php"; ?>  
    <link rel="stylesheet" href="../css/PlantillaFont.css">   
    <title>Document</title>
</head>
<body>
<form method="POST" action="JO_A_accion.php">   
<?php
{
    session_start();
    $Codigo = $_SESSION['Codigo'];
}?>     
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom text-bg-dark">
      <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="../Anfitrion/img/LogoSinFondo2.png" class="img-fluid" style="max-width: 40px">
        <span class="fs-3 text-white">Adivina la Palaba en Just One - <?php echo $Codigo; ?></span>
      </a>

      <ul class="nav nav-pills">
        <button type='submit' class="btn btn-warning btn-block height25" name='IniciarJuego'>Iniciar</button> 
        <li class="nav-item"><a href="JO_NuevoJuego.php" class="nav-link">Salir</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
      </ul>
    </header>




<div class="container">
        <?php require_once "JO_B_CargarDatos.php"; ?>      
        <br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/FondoPug.jpg" class="img-fluid rounded-start mt-4" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <p class="card-text" style="text-align:center">Tarjetas Pendientes.</p>
                        <h1 class="card-title" style="text-align:center"><?php {echo $Pendientes;}?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 600px;">
            <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/FondoPug.jpg" class="img-fluid rounded-start mt-4" alt="..."  ;>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" style="text-align:center">Tarjetas Acertadas.</p>
                            <h1 class="card-title" style="text-align:center"><?php {echo $Acertadas;}?></h1>
                        </div>
                    </div>
                </div>
            </div>     
            <div class="card mb-3" style="max-width: 600px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/FondoPug.jpg" class="img-fluid rounded-start mt-4" alt="..."  ;>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text" style="text-align:center">Tarjetas Descartadas.</p>
                            <h1 class="card-title" style="text-align:center"><?php {echo $Descartadas;}?></h1>
                        </div>
                    </div>
                </div>
            </div>          
        </div>   
        <!--h6 class="textoRaro"><?php {echo $Codigo;}?></h6-->
        <h6 class="textoRaro">Jugador: <?php {echo $Jugador;}?></h6>



    <!--Fin Container-->
    </div>

</form>


<?php
    if(isset($_POST['IniciarJuego']))
    {	
        //session_start();
        $Codigo = $_SESSION['Codigo'];
        include("../php/conexion_sql_server.php");
        $Consulta = "Exec [dbo].[JO_IniciarPartida] '".$Codigo."'";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);

        while($row=sqlsrv_fetch_array($ejecutar)) 
        {
            if ($row['NumError'] == 0)
            {
                echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';	
            }
            else
            {
                echo ' <script type="text/javascript"> alertify.error("'.$row['Descripcion'].'");</script>';	
            }
        }


        sqlsrv_close( $conn_sis);
    }
?>


</body>

</html>
