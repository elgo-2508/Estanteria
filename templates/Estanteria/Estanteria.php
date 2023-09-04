<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario_id'])) {
    // Si no hay una sesión activa, redirigir a la página de inicio de sesión
    header('Location: ../Login/Login.php');
    exit();
}

// Verificar si el token de seguridad es válido
if (!isset($_SESSION['token']) ) 
{
    die("Acceso no autorizado.");
}

// Si el usuario ha iniciado sesión y el token es válido, continuar con el contenido de la página
?>

<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Estanteria</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <script src="../../assets/js/config-1.js"></script>   
    
    
    

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="stylesheet" href="../../assets/css/line-1.css"> <!-- Iconos -->
    <link href="../../assets/css/theme.min-1.css" type="text/css" rel="stylesheet" id="style-default">  <!-- el mas impotante -->
    <link rel="stylesheet" href="../../assets/css/PlantillaRotar.css">

    <!-- ===============================================-->

  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <!-- Menu Vertical Y  HORIZONTAL-->
      <?php require_once "../../APPs/Admin/MD_B_menu.php"; ?>
      <!-- FIN Menu Horizontal colabado y demas-->
      <!-- Inicio cuerpo-->
      <div class="content">
        <!-- inicia el contenido-->
        <div class="card-container">
          <?php {
          include("../../../Estanteria/APPs/php/conexion_mysql.php");
          $Consulta = "call Generar_CargarEstanteria ('Egiraldo');";
          $ejecutar = $conn_sis->query($Consulta);
          $i=1;
	        while($row= $ejecutar->fetch_assoc()) 
            {

            ?>
            <!--section class="section1" id="section1"-->
            <div class="cardElgo">
              <div class="face front">
              <img src=<?php {echo '../../assets/img/estanteria/'.$row['Imagen'];}?> alt="">
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
		        $i=$i+1;
            }		
            $conn_sis->close();

            }?>		
        </div>
        <!-- finaliza el contenido-->
        <!--Pie de pagina-->
        <footer class="footer position-absolute">
          <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 mt-2 mt-sm-0 text-900">Gracias por crear con CodeIA<span class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none">2023 &copy;<a class="mx-1" href="https://codeia.com.co/estanteria/">CodeIA</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
              <p class="mb-0 text-600">v1.0.0</p>
            </div>
          </div>
        </footer>
        <!--Pie de pagina-->
      </div>
      <!-- FIN de cuerpo-->

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
  <script src="../../lib/popper/popper.min.js"></script><!-- Despliga notificaciones-->       
  <script src="../../lib/bootstrap/bootstrap.min.js"></script> <!-- colapsar menus-->  
  <script src="../../lib/fontawesome/all.min.js"></script>   <!-- icono-->  
  <script src="../../lib/lodash/lodash.min.js"></script> <!-- paginacion -->  
  <script src="../../lib/feather-icons/feather.min.js"></script> <!-- visulizar iconos cuando se colapza el menu vertical -->  
  <script src="../../assets/js/phoenix.js"></script> <!-- funcionalidades del menu vertical -->  
  <script src="../../lib/list.js/list.min.js"></script> <!-- manejo de ordenamiento de tablas y busqueda -->  
  </body>

</html>