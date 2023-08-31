<?php
// Iniciar sesión
session_start();

// Generar un token de sesión único
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validar el token de sesión
    if (!empty($_POST['token']) && hash_equals($_SESSION['token'], $_POST['token'])) {
        // Token válido, procesar el formulario
        // Aquí puedes realizar las acciones que desees con los datos enviados en el formulario
        
        // Redirigir a otro formulario o página
        header('Location: NuevoCliente.php');
        exit;
    } else {
        // Token inválido, manejar el error apropiadamente
        header('Location: NuevoCliente.php');
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
      <?php require_once "MD_B_menu.php"; ?>
      <!-- FIN Menu Horizontal colabado y demas-->
      <!-- Inicio cuerpo-->
      <div class="content">
      <div class="row gx-6 gy-3 mb-4 align-items-center">
          <div class="col-auto">
            <h2 class="mb-0">Ronda -<span class="fw-normal text-700 ms-3">Accion</span></h2>
          </div>
          <div class="col-12 col-sm-6 col-md-4 col-xxl-3">
            <div class="btn-reveal-trigger position-relative rounded-2 overflow-hidden p-4" style="height: 500px;">
              <div class="bg-holder" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0) 39.41%, rgba(0, 0, 0, 0.4) 100%), url(img/FondoCarta.png)"></div>
              <div class="position-relative h-100 d-flex flex-column justify-content-between">
                <div class="d-flex justify-content-between align-items-center"><span class="badge badge-phoenix fs--2 light badge-phoenix-primary">Girar</span>
                </div>
                <h3 class="text-white light fw-bold line-clamp-2">Oprima la imagen para accion</h3>
              </div><a class="stretched-link" href="#projectsBoardViewModal" data-bs-toggle="modal"></a>
            </div>
          </div>
        </div>

        <div class="row gx-6 gy-3 mb-4 align-items-center">
          <div class="col-auto">
            <a class="btn btn-primary px-5" href="../../apps/project-management/create-new.html">
              <svg class="svg-inline--fa fa-plus me-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
              </svg><i class="far fa-check-circle"></i>
               Selecionar Mono
              </a>
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