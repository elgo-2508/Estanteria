<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Palabras</title>
  <?php require_once "../php/script.php"; ?> 
  <link rel="stylesheet" href="../css/PlantillaFont.css">  
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 1rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>   
</head>
<body>
    <?php
    {
      session_start();
      $PalabraMisteriosa = $_SESSION['PalabraMisteriosa']; 
      $Participante = $_SESSION['Participante'];
    }
    ?>
  <div class="container">
    <div class="d-flex gap-5 justify-content-center">
        <h1> <span id="current-word">Acción</span></h1>
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
    <div class="b-example-divider"></div>
    <div class="container px-4 py-5" id="hanging-icons"> 
        <div class="d-flex gap-5 justify-content-center">
            <h1> <span id="current-word"><?php {echo $Participante;}?></span></h1>
        </div>
    </div>
    <div class="b-example-divider"></div>    
    <div class="container px-4 py-5" id="hanging-icons"> 
    <div class="d-flex gap-5 justify-content-center">
      <h6 class="textoRaro"><?php {echo $PalabraMisteriosa;}?></h6>
    </div>
    </div>
    <div class="b-example-divider"></div>   
    <form method="post" action="JO_B_Guardar_palabra.php">
      <div class="container px-4 py-5" id="hanging-icons"> 
        <div class="d-flex gap-5 justify-content-center">
            <h1> <span id="current-word">Digite palabra clave</span></h1>
        </div>
        <div class="d-flex gap-5 justify-content-center">
          <input type="text" class="form-control" id="new-word" name="new-word" required>
        </div>
        <br>
        <div class="d-flex gap-5 justify-content-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>
      </form>
</body>
</html>
