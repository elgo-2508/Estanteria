<?php
// Iniciar sesión
session_start();

// Generar un token de sesión único
$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;
$CodigoPartida =$_GET['codigoPartida'];

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
    <?php require "../Librerias/phpqrcode/qrlib.php";?>       

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
        <!-- inicia el contenido-->
        <!-- Navegacion pagina-->
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="/templates/Estanteria/Estanteria.php">Estanteria</a></li>
            <li class="breadcrumb-item active">Partida</li>
          </ol>
        </nav>
        <!-- Fin Navegacion pagina-->
        <!-- Inicio formulario-->
        <div class="mb-12">
          <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-auto">
              <h2 class="mb-0">Juego Activo - <?php echo ($CodigoPartida); ?></h2>
            </div>
            <div class="col-auto">
              <div class="row g-3">
                <div class="col-auto"><button class="btn btn-phoenix-danger"><span class="fa-solid fa-trash-can me-2"></span>Eliminar Partida</button></div>
            </div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xxl-12">
              <div class="row g-3 g-xxl-0 h-100">
                <div class="col-12 col-md-7 col-xxl-7 mb-xxl-3">
                  <div class="card h-100">
                    <div class="card-body d-flex flex-column justify-content-between pb-3">
                      <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                        <div class="col-12 col-sm-auto mb-sm-2">
                          <?php require_once "GenerarImagen.php"; ?>
                          <div class="avatar avatar-5xl"><img  src="Temp/Codigo.png" alt="" /></div>
                        </div>
                        <div class="col-12 col-sm-auto flex-1">
                          <h3>Just One</h3>
                          <p class="text-800">Iniciado el 2023-05-18 12:30 AM</p>
                          <div>
                            <a class="me-2" href="#!">
                              <span class="fab fa-linkedin-in text-400 hover-primary"></span>
                            </a>
                            <a class="me-2" href="#!">
                              <span class="fab fa-facebook text-400 hover-primary"></span>
                            </a>
                            <a href="#!">
                              <span class="fab fa-twitter text-400 hover-primary"></span>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-between-center border-top border-dashed border-300 pt-4">
                        <div>
                          <h6>Participantes</h6>
                          <p class="fs-1 text-800 mb-0">6</p>
                        </div>
                        <div>
                          <h6>Fase</h6>
                          <p class="fs-1 text-800 mb-0">Validacion</p>
                        </div>
                        <div>
                          <h6>Estado</h6>
                          <p class="fs-1 text-800 mb-0">Finalizado</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-xxl-5 mb-xxl-3">
                  <div class="card h-100">
                    <div class="card-body pb-3">
                      <div class="d-flex align-items-center mb-3">
                        <h3 class="me-1">Puntos</h3><button class="btn btn-link p-0"><span class="fas fa-pen fs-0 ms-3 text-500"></span></button>
                      </div>
                      <h5 class="text-800">Address</h5>
                      <p class="text-800">Shatinon Mekalan<br />Vancouver, British Columbia<br />Canada</p>
                      <div class="mb-3">
                        <h5 class="text-800">Email</h5><a href="mailto:shatinon@jeemail.com">shatinon@jeemail.com</a>
                      </div>
                      <h5 class="text-800">Phone</h5><a class="text-800" href="tel:+1234567890">+1234567890</a>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card h-100">
                    <div class="card-body">
                      <h3 class="mb-4">Participantes</h3>
                      <div id="tableExample" data-list="{&quot;valueNames&quot;:[&quot;Codigo&quot;,&quot;Juego&quot;,&quot;Estado&quot;],&quot;page&quot;:7,&quot;pagination&quot;:true}">
                        <div class="table-responsive">
                          <table class="table table-sm fs--1 mb-0">
                            <thead>
                              <tr>
                                <th class="sort border-top ps-3" data-sort="Codigo">Codigo</th>
                                <th class="sort border-top" data-sort="Juego">Juego</th>
                                <th class="sort border-top" data-sort="date">Fecha</th>
                                <th class="sort border-top" data-sort="Estado">Estado</th>
                                <th class="sort border-top" data-sort="Fase">Fase</th>
                                <th class="sort text-end align-middle pe-0 border-top" scope="col">ACTION</th>
                              </tr>
                            </thead>
                            <tbody class="list">
                              <?php require_once "BDCargarPartActiv.php"; ?>
                            </tbody>
                          </table>
                        </div>
                        <div class="d-flex flex-between-center pt-3">
                          <div class="pagination d-none"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li><li class="disabled"><button class="page" type="button">...</button></li></div>
                          <p class="mb-0 fs--1">
                            <span class="d-none d-sm-inline-block" data-list-info="data-list-info">1 to 5 <span class="text-600"> Items of </span>43</span>
                            <span class="d-none d-sm-inline-block"> — </span>
                            <a class="fw-semi-bold" href="#!" data-list-view="*">
                              View all
                              <svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com -->
                            </a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">
                              View Less
                              <svg class="svg-inline--fa fa-angle-right ms-1" data-fa-transform="down-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="" style="transform-origin: 0.25em 0.5625em;"><g transform="translate(128 256)"><g transform="translate(0, 32)  scale(1, 1)  rotate(0 0 0)"><path fill="currentColor" d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z" transform="translate(-128 -256)"></path></g></g></svg><!-- <span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span> Font Awesome fontawesome.com -->
                            </a>
                          </p>
                          <div class="d-flex">
                            <button class="btn btn-sm btn-primary disabled" type="button" data-list-pagination="prev" disabled=""><span>Previous</span></button>
                            <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                          </div>
                        </div>
                      </div>                      

                    </div>
                  </div>
                </div>
              </div>
            </div>        


                    

        <!-- Fin formulario-->
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