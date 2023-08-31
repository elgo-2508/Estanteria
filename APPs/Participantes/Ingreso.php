<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Eduardo Giraldo Galeano">
    <meta name="generator" content="Notepad++">
    <title>Girald Games</title>
	<?php require_once "../php/script.php"; ?>
  </head>
  <body>
	<main>
	<form method="POST" action="Ingreso.PHP">
	  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
		  <div class="col-lg-7 text-center text-lg-start">
		  	<img class="me-3 bg-purple rounded shadow-sm" src="img/LogoSinFondo2.png" alt="" height="100">
			<h1 class="display-4 fw-bold lh-1 mb-3">Girald Games</h1>
			<p class="col-lg-10 fs-4">Aplicacion para juegos en familia</p>
			<br>
		</div>
			  <div class="col-md-10 mx-auto col-lg-5">
				<form class="p-4 p-md-5 border rounded-3 bg-light">
				  <div class="form-floating mb-3">
					<input type="text" class="form-control" id="Codigo" name="Codigo" id="floatingInput" >
					<label autocomplete="off" for="floatingInput">Codigo</label>
				  </div>
				  <div class="form-floating mb-3">
					<input type="text" class="form-control" name="Participante" id="floatingInput" >
					<label autocomplete="off" for="floatingInput">Participante</label>
				  </div>				  
				  <button class="w-100 btn btn-lg btn-primary" name="insert" type="submit">Ingresar</button>
				 	<br> </br> 
				  <button class="w-100 btn btn-lg btn btn-secondary" name="Re_insert" type="submit">re-Ingresar</button>
				</form>
			  </div>

		</div>
	  </div>
	</form>
	<?php require_once "../php/ValidarIngreso.php"; ?>
	</main>
  </body>
</html>
<script>
        var params = new URLSearchParams(window.location.search);
        document.getElementById("Codigo").value = params.get("Codigo");
    </script>