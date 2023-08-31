<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrusel de Imágenes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    .carousel-item img {
      object-fit: cover;
      height: 100vh;
    }
  </style>
</head>
<body>

<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Generar las imágenes utilizando un ciclo for -->
    <?php 

      for ($i = 1; $i <= 7; $i++) { ?>
      <div class="carousel-item <?php if ($i === 1) echo 'active'; ?>">
        <img src="<?php echo 'FotosTv/Altillo' . $i . '.jpg'; ?>" class="d-block w-50" alt="Imagen <?php echo $i; ?>">
      </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Iniciar el carrusel y establecer intervalo de cambio cada 20 segundos
  var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExample'), {
   interval: 1000  // Intervalo en milisegundos (20 segundos)
    wrap: true 
  });
</script>
</body>
</html>
