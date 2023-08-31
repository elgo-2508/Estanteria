<?php
/*
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
*/
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
    <title>Adicionar Juego</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <script src="../../assets/js/config-1.js"></script>       
		<!-- icono del navegador -->
    <!-- fin icono del navegador -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../../assets/img/favicons/manifest.json">
		<meta name="msapplication-TileImage" content="../../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
		<script src="../../lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../../lib/simplebar/simplebar.min.js"></script>


    
    

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="../../assets/css/theme.min-1.css" type="text/css" rel="stylesheet" id="style-default">  <!-- el mas impotante -->

		
    <link href="../../lib/dropzone/dropzone.min.css" rel="stylesheet">
    <link href="../../lib/choices/choices.min.css" rel="stylesheet">
    
		<link href="../../lib/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../../lib/simplebar/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    

		<!--
		<link href="../../assets/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="../../assets/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="../../assets/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">


		-->
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
        <nav class="mb-2" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Estanteria</a></li>
            <li class="breadcrumb-item active">Adicionar Juego</li>
          </ol>
        </nav>
        <form class="mb-9">
          <div class="row g-3 flex-between-end mb-5">
            <div class="col-auto">
              <h2 class="mb-2">Adicionar Juego</h2>
              <h5 class="text-700 fw-semi-bold">Pedidos realizados en tu tienda</h5>
            </div>
            <div class="col-auto"><button class="btn btn-phoenix-secondary me-2 mb-2 mb-sm-0" type="button">Descartar</button><button class="btn btn-phoenix-primary me-2 mb-2 mb-sm-0" type="button">Salvar Borrador</button><button class="btn btn-primary mb-2 mb-sm-0" type="submit">Publicar Juego</button></div>
          </div>
          <div class="row g-5">
            <div class="col-12 col-xl-8">
              <h4 class="mb-3">Titulo del juego</h4><input class="form-control mb-5" type="text" placeholder="Escriba el titulo aquí..." />
              <div class="mb-6">
                <h4 class="mb-3">Descripcion del juego</h4><textarea class="tinymce" name="content" data-tinymce='{"height":"15rem","placeholder":"Escriba la descripción aquí..."}'></textarea>
              </div>
              <h4 class="mb-3">Imagenes</h4>
              <div class="dropzone dropzone-multiple p-0 mb-5" id="my-awesome-dropzone" data-dropzone="data-dropzone">
                <div class="fallback"><input name="file" type="file" multiple="multiple" /></div>
                <div class="dz-preview d-flex flex-wrap">
                  <div class="border bg-white rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="../../assets/img/products/23.png" alt="..." data-dz-thumbnail="data-dz-thumbnail" /><a class="dz-remove text-400" href="#!" data-dz-remove="data-dz-remove"><span data-feather="x"></span></a></div>
                </div>
                <div class="dz-message text-600" data-dz-message="data-dz-message">Arrastre su foto aquí<span class="text-800 px-1">O</span><button class="btn btn-link p-0" type="button">Busque en su dispositivo</button><br /><img class="mt-3 me-2" src="../../assets/img/icons/image-icon.png" width="40" alt="" /></div>
              </div>
              <h4 class="mb-3">Inventario</h4>
              <div class="row g-0 border-top border-bottom border-300">
                <div class="col-sm-4">
                  <div class="nav flex-sm-column border-bottom border-bottom-sm-0 border-end-sm border-300 fs--1 vertical-tab h-100 justify-content-between" role="tablist" aria-orientation="vertical"><a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active" id="pricingTab" data-bs-toggle="tab" data-bs-target="#pricingTabContent" role="tab" aria-controls="pricingTabContent" aria-selected="true"> <span class="me-sm-2 fs-4 nav-icons" data-feather="tag"></span><span class="d-none d-sm-inline">Precio</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="restockTab" data-bs-toggle="tab" data-bs-target="#restockTabContent" role="tab" aria-controls="restockTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="package"></span><span class="d-none d-sm-inline">Inventario en stock</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="shippingTab" data-bs-toggle="tab" data-bs-target="#shippingTabContent" role="tab" aria-controls="shippingTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="truck"></span><span class="d-none d-sm-inline">Shipping</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="productsTab" data-bs-toggle="tab" data-bs-target="#productsTabContent" role="tab" aria-controls="productsTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="globe"></span><span class="d-none d-sm-inline">Global Delivery</span></a><a class="nav-link border-end border-end-sm-0 border-bottom-sm border-300 text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="attributesTab" data-bs-toggle="tab" data-bs-target="#attributesTabContent" role="tab" aria-controls="attributesTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="sliders"></span><span class="d-none d-sm-inline">Attributes</span></a><a class="nav-link text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center" id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent" role="tab" aria-controls="advancedTabContent" aria-selected="false"> <span class="me-sm-2 fs-4 nav-icons" data-feather="lock"></span><span class="d-none d-sm-inline">Advanced</span></a></div>
                </div>
                <div class="col-sm-8">
                  <div class="tab-content py-3 ps-sm-4 h-100">
                    <div class="tab-pane fade show active" id="pricingTabContent" role="tabpanel">
                      <h4 class="mb-3 d-sm-none">Pricing</h4>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Regular price</h5><input class="form-control" type="text" placeholder="$$$" />
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Sale price</h5><input class="form-control" type="text" placeholder="$$$" />
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="restockTabContent" role="tabpanel" aria-labelledby="restockTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-1000">Add to Stock</h5>
                        <div class="row g-3 flex-1 mb-4">
                          <div class="col-sm-7"><input class="form-control" type="number" placeholder="Quantity" /></div>
                          <div class="col-sm"><button class="btn btn-primary" type="button"><span class="fa-solid fa-check me-1 fs--2"></span>Confirm</button></div>
                        </div>
                        <table>
                          <thead>
                            <tr>
                              <th style="width: 200px;"></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Product in stock now:</td>
                              <td class="text-700 fw-semi-bold py-1">$1,090<button class="btn p-0" type="button"><span class="fa-solid fa-rotate text-900 ms-1" style="--phoenix-text-opacity: .6;"></span></button></td>
                            </tr>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Product in transit:</td>
                              <td class="text-700 fw-semi-bold py-1">5000</td>
                            </tr>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Last time restocked:</td>
                              <td class="text-700 fw-semi-bold py-1">30th June, 2021</td>
                            </tr>
                            <tr>
                              <td class="text-1000 fw-bold py-1">Total stock over lifetime:</td>
                              <td class="text-700 fw-semi-bold py-1">20,000</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="tab-pane fade h-100" id="shippingTabContent" role="tabpanel" aria-labelledby="shippingTab">
                      <div class="d-flex flex-column h-100">
                        <h5 class="mb-3 text-1000">Shipping Type</h5>
                        <div class="flex-1">
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledBySeller" /><label class="form-check-label fs-0 text-900" for="fullfilledBySeller">Fullfilled by Seller</label></div>
                            <div class="ps-4">
                              <p class="text-800 fs--1 mb-0">You’ll be responsible for product delivery. <br />Any damage or delay during shipping may cost you a Damage fee.</p>
                            </div>
                          </div>
                          <div class="mb-4">
                            <div class="form-check mb-1"><input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked" /><label class="form-check-label fs-0 text-900 d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Phoenix <span class="badge badge-phoenix badge-phoenix-warning fs--2 ms-2">Recommended</span></label></div>
                            <div class="ps-4">
                              <p class="text-800 fs--1 mb-0">Your product, Our responsibility.<br />For a measly fee, we will handle the delivery process for you.</p>
                            </div>
                          </div>
                        </div>
                        <p class="fs--1 fw-semi-bold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="productsTabContent" role="tabpanel" aria-labelledby="productsTab">
                      <h5 class="mb-3 text-1000">Global Delivery</h5>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="worldwideDelivery" /><label class="form-check-label fs-0 text-900" for="worldwideDelivery">Worldwide delivery</label></div>
                        <div class="ps-4">
                          <p class="fs--1 mb-0 text-800">Only available with Shipping method: <a href="#!">Fullfilled by Phoenix</a></p>
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" checked="checked" id="selectedCountry" /><label class="form-check-label fs-0 text-900" for="selectedCountry">Selected Countries</label></div>
                        <div class="ps-4" style="max-width: 350px;"><select class="form-select ps-4" id="organizerMultiple" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Type Country name</option>
                            <option>United States of America</option>
                            <option>United Kingdom</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                          </select></div>
                      </div>
                      <div>
                        <div class="form-check"><input class="form-check-input" type="radio" name="deliveryRadio" id="localDelivery" /><label class="form-check-label fs-0 text-900" for="localDelivery">Local delivery</label></div>
                        <p class="fs--1 ms-4 mb-0 text-800">Deliver to your country of residence <a href="#!">Change profile address </a></p>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="attributesTabContent" role="tabpanel" aria-labelledby="attributesTab">
                      <h5 class="mb-3 text-1000">Attributes</h5>
                      <div class="form-check"><input class="form-check-input" id="fragileCheck" type="checkbox" /><label class="form-check-label text-900 fs-0" for="fragileCheck">Fragile Product</label></div>
                      <div class="form-check"><input class="form-check-input" id="biodegradableCheck" type="checkbox" /><label class="form-check-label text-900 fs-0" for="biodegradableCheck">Biodegradable</label></div>
                      <div class="mb-3">
                        <div class="form-check"><input class="form-check-input" id="frozenCheck" type="checkbox" checked="checked" /><label class="form-check-label text-900 fs-0" for="frozenCheck">Frozen Product</label><input class="form-control" type="text" placeholder="Max. allowed Temperature" style="max-width: 350px;" /></div>
                      </div>
                      <div class="form-check"><input class="form-check-input" id="productCheck" type="checkbox" checked="checked" /><label class="form-check-label text-900 fs-0" for="productCheck">Expiry Date of Product</label><input class="form-control inventory-attributes datetimepicker" id="inventory" type="text" style="max-width: 350px;" placeholder="d/m/y" data-options='{"disableMobile":true}' /></div>
                    </div>
                    <div class="tab-pane fade" id="advancedTabContent" role="tabpanel" aria-labelledby="advancedTab">
                      <h5 class="mb-3 text-1000">Advanced</h5>
                      <div class="row g-3">
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Product ID Type</h5><select class="form-select" aria-label="form-select-lg example">
                            <option selected="selected">ISBN</option>
                            <option value="1">UPC</option>
                            <option value="2">EAN</option>
                            <option value="3">JAN</option>
                          </select>
                        </div>
                        <div class="col-12 col-lg-6">
                          <h5 class="mb-2 text-1000">Product ID</h5><input class="form-control" type="text" placeholder="ISBN Number" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="row g-2">
                <div class="col-12 col-xl-12">
                  <div class="card mb-3">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Organizar</h4>
                      <div class="row gx-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-1000 me-2">Categoria</h5><a class="fw-bold fs--1" href="#!">Add una categoria</a>
                            </div><select class="form-select mb-3" aria-label="category">
                              <option value="Habilidad">Habilidad y destreza</option>
                              <option value="Roles">Roles ocultos</option>
                              <option value="Party">Party</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="mb-0 text-1000 me-2">Numero Juegadores</h5><a class="fw-bold fs--1" href="#!">Add # de jugadores</a>
                            </div><select class="form-select mb-3" aria-label="category">
                              <option value="men-cloth">2-4</option>
                              <option value="women-cloth">3-6</option>
                              <option value="kid-cloth">mas de 3</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="mb-4">
                            <h5 class="mb-2 text-1000">Creador</h5><input class="form-control mb-xl-3" type="text" placeholder="Collection" />
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap mb-2">
                            <h5 class="mb-0 text-1000 me-2">Tags</h5><a class="fw-bold fs--1 lh-sm" href="#!">View all tags</a>
                          </div><select class="form-select" aria-label="category">
                            <option value="men-cloth">EuroGame</option>
                            <option value="women-cloth">AmericanGame</option>
                            <option value="kid-cloth">Tradicional</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title mb-4">Administracion</h4>
                      <div class="row g-3">
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="border-bottom border-dashed border-sm-0 border-bottom-xl pb-4">
                            <div class="d-flex flex-wrap mb-2">
                              <h5 class="text-1000 me-2">Option 1</h5><a class="fw-bold fs--1" href="#!">Remove</a>
                            </div><select class="form-select mb-3">
                              <option value="size">Size</option>
                              <option value="color">Color</option>
                              <option value="weight">Weight</option>
                              <option value="smell">Smell</option>
                            </select>
                            <div class="product-variant-select-menu"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="size">4x6 in</option>
                                <option value="color">9x6 in</option>
                                <option value="weight">11x8 in</option>
                              </select></div>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 col-xl-12">
                          <div class="d-flex flex-wrap mb-2">
                            <h5 class="text-1000 me-2">Option 2</h5><a class="fw-bold fs--1" href="#!">Remove</a>
                          </div><select class="form-select mb-3">
                            <option value="size">Size</option>
                            <option value="color">Color</option>
                            <option value="weight">Weight</option>
                            <option value="smell">Smell</option>
                          </select>
                          <div class="product-variant-select-menu mb-3"><select class="form-select mb-3" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                              <option value="size">4x6 in</option>
                              <option value="color">9x6 in</option>
                              <option value="weight">11x8 in</option>
                            </select></div>
                        </div>
                      </div><button class="btn btn-phoenix-primary w-100" type="button">Add another option</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
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

    <script src="../../lib/anchorjs/anchor.min.js"></script>
		<script src="../../lib/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../lib/dayjs/dayjs.min.js"></script>
    <script src="../../lib/tinymce/tinymce.min.js"></script>
    <script src="../../lib/dropzone/dropzone.min.js"></script>
    <script src="../../lib/choices/choices.min.js"></script>

	<!--	-->



  </body>

</html>