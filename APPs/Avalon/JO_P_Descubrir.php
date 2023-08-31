<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Palabras</title>
  <?php require_once "../php/script.php"; ?> 
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
    $Pal_Jugadores = $_SESSION['Pal_Jugadores'] ; 
    $Pal_Digita = $_SESSION['Pal_Digita'] ; 
  }
  ?>    
  <div class="container">
    <div class="d-flex gap-5 justify-content-center">
        <h1> <span id="current-word">Descubrir</span></h1>
        <button type="button" class="btn-close" aria-label="Close"></button>
    </div>
    <div class="b-example-divider"></div>
    <div class="container px-2 py-5" id="hanging-icons"> 
        <div class="d-flex gap-5 justify-content-center">
            <h1> <span id="current-word"><?php {echo $Participante;}?></span></h1>
        </div>
    </div>
    <div class="b-example-divider"></div>    
    <div class="container px-4 py-5" id="hanging-icons"> 
    <div class="d-flex gap-5 justify-content-center">
      <?php
        // Cadena original
        $cadena = $Pal_Jugadores;

        // Separamos la cadena en un array utilizando el separador "|"
        $palabras = explode("|", $cadena);

        // Creamos la tabla HTML y sus encabezados
        echo "<table class='table table-striped'>";
        // Insertamos cada palabra en la tabla HTML en dos columnas
        $contador = 0;
        foreach ($palabras as $palabra) {
            // Comprobamos si se ha completado la primera columna
            if ($contador % 2 == 0) {
                echo "<tr>";
            }
            echo "<td>" . $palabra . "</td>";
            $contador++;
            // Comprobamos si se ha completado la segunda columna
            if ($contador % 2 == 0) {
                echo "</tr>";
            }
        }

        // Si la última fila no se completó, la completamos con una celda vacía
        if ($contador % 2 != 0) {
            echo "<td></td></tr>";
        }

        // Cerramos la tabla
        echo "</table>";

        ?>
    </div>
    </div>
    <div class="b-example-divider"></div>   
    <div class="container px-4 py-5" id="hanging-icons"> 
        <form method="post" action="JO_B_Guardar_descubrir.php">
            <div class="d-flex gap-5 justify-content-center">
                <button type="submit" name="Acierta" class="btn btn-success">Acierta</button>
                <button type="submit" name="Pasa" class="btn btn-warning">Pasa</button>                
                <button type="submit" name="Falla" class="btn btn-danger">Falla</button>
            </div>
        </form>
    </div>
</body>
</html>
