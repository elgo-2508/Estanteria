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
	        <!---------------------------------------------------------------->

            
            

		<div class="col-lg-10  col-md-12">
            
        </div>
        <header class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#" id="logo"><img src="img/LogoSinFondo2.png" style="max-width: 50px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Generar Filtro</a>
                    </li>
                </ul>
            </div>
	    </header>
		</div>


        
        <!---------------------------------------------------------------->

        <?php {
        include("../php/conexion_sql_server.php");
        $Consulta = "Exec Generar_CargarEstanteria";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
        while($row=sqlsrv_fetch_array($ejecutar)) {

            ?>
            <!--section class="section1" id="section1"-->
            <div class="card">
                <div class="face front">
                <img src=<?php {echo $row['Imagen'];}?> alt="">
                    <h3><?php {echo $row['Nombre'];}?></h3>
                </div>
                <div class="face back">
                    <p><?php {echo $row['Nombre'];}?></p>
                    <p>Ctegoria: <?php {echo $row['Categoria'];}?></p>
                    <p><?php {echo $row['Descripcion'];}?>.</p>
                    <div class="link">
                        <a bg-dark href=<?php {echo $row['php'];}?>><span class="badge rounded-pill bg-warning text-dark">Cargar Juego</span></a>							
                    </div>
                </div>
            </div>
            <!--/section-->

            <?php    
        }
        sqlsrv_close( $conn_sis);

        }?>



            
        <!---------------------------------------------------------------->		
	</div>


</body>
</html>