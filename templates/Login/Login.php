<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ===============================================-->
	<!--    Document Title-->
	<!-- ===============================================-->
	<title>Inicio de sesión</title>

	<!-- ===============================================-->
	<!--    Favicons-->
	<!-- ===============================================-->

	<link rel="stylesheet" href="../../assets/css/line.css">
	<!--iconos-->
	<link href="../../assets/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
	<!--Mas Importante - este es el que genera el estilo-->

</head>

<body>
	<!-- ===============================================-->
	<!--    Main Content-->
	<!-- ===============================================-->
	<main class="main" id="top">
		<div class="container-fluid bg-300 dark__bg-1200">
			<div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../assets/img/bg/37.png);"></div>
			<!--/.bg-holder-->
			<div class="row flex-center position-relative min-vh-100 g-0 py-5">
				<div class="col-11 col-sm-10 col-xl-8">
					<div class="card border border-200 auth-card">
						<div class="card-body pe-md-0">
							<div class="row align-items-center gx-0 gy-7">
								<div
									class="col-auto bg-100 dark__bg-1100 rounded-3 position-relative overflow-hidden auth-title-box">
									<div class="bg-holder" style="background-image:url(../../assets/img/bg/38.png);">
									</div>
									<!--/.bg-holder-->
									<div
										class="position-relative px-4 px-lg-4 pt-4 pb-4 pb-sm-5 text-center text-md-start pb-lg-4 pb-md-4">
										<!-- Contenedor principal -->
										<h3 class="mb-3 text-black fs-1">Tu Estanteria</h3> <!-- Título principal -->
										<p class="text-700">Bienvenido a la aplicación de gestion de estanteria, Tu
											inventario de juegos en un solo lugar.</p> <!-- Párrafo de bienvenida -->

										<ul class="list-unstyled mb-0 w-max-content w-md-auto mx-auto">
											<!-- Lista sin estilos -->
											<li class="d-flex align-items-center">
												<span class="uil uil-check-circle text-success me-2"></span>
												<!-- Icono de check -->
												<span class="text-700 fw-semi-bold">Amigable</span>
												<!-- Elemento de lista -->
											</li>
											<li class="d-flex align-items-center">
												<span class="uil uil-check-circle text-success me-2"></span>
												<!-- Icono de check -->
												<span class="text-700 fw-semi-bold">Divertido</span>
												<!-- Elemento de lista -->
											</li>
											<li class="d-flex align-items-center">
												<span class="uil uil-check-circle text-success me-2"></span>
												<!-- Icono de check -->
												<span class="text-700 fw-semi-bold">Unificado</span>
												<!-- Elemento de lista -->
											</li>
										</ul>
									</div>

									<!-- Imagen del pajarito-->
									<div
										class="position-relative z-index--1 mb-6 d-none d-md-block text-center mt-md-15">
										<img class="auth-title-box-img d-dark-none"
											src="../../assets/img/spot-illustrations/auth.png" alt="">
										<img class="auth-title-box-img d-light-none"
											src="../../assets/img/spot-illustrations/auth-dark.png" alt="">
									</div>
								</div>
								<div class="col mx-auto">
                  <form method="POST" action="ValidarContraseña.php">
                    <div class="auth-form-box">
                      <div class="text-center mb-7">
                        <a class="d-flex flex-center text-decoration-none mb-4" href="">
                          <!-- Imagen del LOGO-->
                          <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block">
                            <img src="../../assets/img/icons/logo.png" alt="phoenix" width="58">
                          </div>
                        </a>
                        <h3 class="text-1000">inicio de sesión</h3>
                        <p class="text-700">Obtenga acceso a su cuenta</p>
                      </div>
                      <?php require ('autentificacion.php')?>
                      <a href='<?php echo $client->createAuthUrl() ?>'>
                        <button class="btn btn-phoenix-secondary w-100 mb-3">
                          <svg class="svg-inline--fa fa-google text-danger me-2 fs--1"
                            aria-hidden="true" focusable="false" data-prefix="fab"
                            data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 488 512" data-fa-i2svg="">
                            <path fill="currentColor"
                              d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                            </path>
                          </svg>
                          <!-- <span class="fab fa-google text-danger me-2 fs--1"></span> Font Awesome fontawesome.com -->
                          Sign in with google
                        </button>
                      </a>
                      <div class="position-relative">
                        <hr class="bg-200 mt-5 mb-4">
                        <div class="divider-content-center bg-white">or use email</div>
                      </div>
                      <div class="mb-3 text-start">
                        <label class="form-label" for="email">Direccion de correo</label>
                        <div class="form-icon-container">
                          <input class="form-control form-icon-input" id="email" name="email" type="email" placeholder="name@example.com">
                          <span class="fas fa-user text-900 fs--1 form-icon"></span>
                        </div>
                      </div>
                      <div class="mb-3 text-start"><label class="form-label"
                          for="password">Password</label>
                        <div class="form-icon-container">
                          <input class="form-control form-icon-input"
                          name="password" id="password" type="password" placeholder="Password">
                          <span class="fas fa-key text-900 fs--1 form-icon"></span>
                        </div>
                      </div>
                      <div class="row flex-between-center mb-7">
                        <div class="col-auto">
                          <div class="form-check mb-0"><input class="form-check-input"
                              id="basic-checkbox" type="checkbox" checked="checked"><label
                              class="form-check-label mb-0" for="basic-checkbox">Remember
                              me</label></div>
                        </div>
                        <div class="col-auto"><a class="fs--1 fw-semi-bold"
                            href="forgot-password.html">Olvido su contraseña?</a></div>
                      </div><button class="btn btn-primary w-100 mb-3">Ingresar</button>
                      <div class="text-center"><a class="fs--1 fw-bold" href="sign-up.html">Crear una
                          cuenta</a></div>
                    </div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- ===============================================-->
	<!--    End of Main Content-->
	<!-- ===============================================-->

	<!-- ===============================================-->
	<!--    JavaScripts-->
	<!-- ===============================================-->

	<script src="../../lib/bootstrap/bootstrap.min.js"></script>
	<script src="../../lib/fontawesome/all.min.js"></script><!-- iconos dentro de los cajones-->
</body>

</html>