<?php
// Iniciar sesión
session_start();

// Generar un token de sesión único
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Validar el token de sesión

    if(isset($_POST['CrearJuego']))
    {	
        $_SESSION['floatingSelectGame'] = $_POST['floatingSelectGame'];
        $_SESSION['floatingInputJugadores'] = $_POST['floatingInputJugadores'];			
        $_SESSION['floatingInputIP'] = $_POST['floatingInputIP'];			
        $_SESSION['floatingInputDuracion'] = $_POST['floatingInputDuracion'];		
        header('Location: BDCrearNuevaPartida.php');
        exit;
    } else {
        // Token inválido, manejar el error apropiadamente
        $_SESSION['token'] = $token;
        $_SESSION['floatingSelectGame'] = $_POST['floatingSelectGame'];
        $_SESSION['floatingInputJugadores'] = $_POST['floatingInputJugadores'];			
        $_SESSION['floatingInputIP'] = $_POST['floatingInputIP'];			
        $_SESSION['floatingInputDuracion'] = $_POST['floatingInputDuracion'];		        
        header('Location: BDCrearNuevaPartida.php');
    }
}
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
    <title>Clientes</title>

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
      <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/Estanteria/APPs/Admin/MD_B_menu.php"; ?>
      <!-- FIN Menu Horizontal colabado y demas-->
      <!-- Inicio cuerpo-->
      <div class="content">
        <form method="post" action="NuevoJuego.php">
          <!-- inicia el contenido-->
          <!-- Navegacion pagina-->
          <nav class="mb-2" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="../../templates/Estanteria/Estanteria.php">Home</a></li>
              <li class="breadcrumb-item active">Nuevo Juego</li>
            </ol>
          </nav>
          <div class="border-bottom mb-7 mx-n3 px-2 mx-lg-n6 px-lg-6">
            <div class="row">
              <div class="col-xl-12">
                <div class="d-sm-flex justify-content-between">
                  <h2 class="mb-4">Nuevo Juego</h2>
                  <div class="d-flex mb-3">
                    <button class="btn btn-phoenix-primary me-2 px-6" name="Cancelar">Cancelar</button>
                    <button class="btn btn-primary" name="CrearJuego">Crear</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <h4 class="mb-3">Informacion Basica </h4>
              <div class="row g-3 mb-9">
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating">
                    <select class="form-select" name="floatingSelectGame">
                      <option selected="selected">Juego</option>
                      <option value="Just One">Just One</option>
                      <option value="Palabras Cruzadas">Palabras Cruzadas</option>
                      <option value="Topo">Topo</option>
                      <option value="MonkyDu">MonkyDu</option>
                      <option value="DixIt">DixIt</option>
                    </select>
                    <label for="floatingSelectGame">Juego</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><input class="form-control" name="floatingInputJugadores" type="text" placeholder="Numero de jugadores" /><label for="floatingInputJugadores">Numero de jugadores</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><input class="form-control" name="floatingInputIP" type="text" placeholder="Last name" /><label for="floatingInputIP">IP Servidor</label></div>
                </div>
                <div class="col-sm-6 col-md-6">
                  <div class="form-floating"><input class="form-control" name="floatingInputDuracion" type="text" placeholder="Company" /><label for="floatingInputDuracion">Duracion</label></div>
                </div>
              </div>
            </div>    
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
        </form>
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