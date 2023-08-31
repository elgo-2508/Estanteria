<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Website</title>
  <?php require_once "../php/script.php"; ?>   
  <!-- CSS personalizado -->
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../css/PlantillaRotarAjuste.css">  

</head>
<body>
    <!-- ===============================================-->
    <!--    Nvar lateral-->
    <!-- ===============================================-->

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">

  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/LogoSinFondo2.png" alt="Boostrap" width="30">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Filtrar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <!-- ===============================================-->
    <!--    menu vertical-->
    <!-- ===============================================-->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-12">
      <nav class="navbar navbar-vertical navbar-expand-lg">
          <script>
            var navbarStyle = window.config.config.phoenixNavbarStyle;
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <!-- scrollbar removed-->
            <div class="navbar-vertical-content">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages-->
                  <div class="nav-item-wrapper">
                    <a class="nav-link dropdown-indicator label-1" href="#home" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="home">
                      <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83">
                            </path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z">
                            </path></svg>
                          </span>
                          <span class="nav-link-text">Filtro</span>
                      </div>
                    </a>
                    <div class="parent-wrapper label-1">
                      <ul class="nav collapse parent show" data-bs-parent="#navbarVerticalCollapse" id="home">
                        <li class="collapsed-nav-item-title d-none">Filtro</li>
                        <li class="nav-item">
                        <div>
                          <input type="checkbox" id="categoria1" name="categoria1" value="Estrategia">
                          <label for="categoria1">Estrategia</label><br>
                          <input type="checkbox" id="categoria2" name="categoria2" value="Fantasía">
                          <label for="categoria2">Fantasía</label><br>
                          <input type="checkbox" id="categoria3" name="categoria3" value="Aventura">
                          <label for="categoria3">Aventura</label><br>
                          <input type="checkbox" id="categoria4" name="categoria4" value="Familia">
                          <label for="categoria4">Familia</label><br>
                          <input type="checkbox" id="categoria5" name="categoria5" value="Party">
                          <label for="categoria5">Party</label><br>
                        </div>
                        </li><br>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="navbar-vertical-footer">

</nav>
      </div>


    <!-- ===============================================-->
    <!--    Contenido-->
    <!-- ===============================================-->
      <div class="col-md-10 col-sm-12">
      <div class="row">    
    <?php {
      include("../php/conexion_sql_server.php");
      $Consulta = "Exec Generar_CargarEstanteria";
      $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
      while($row=sqlsrv_fetch_array($ejecutar)) {
      ?>
      <!--section class="section1" id="section1"-->
      <div class="card">
        <div class="face front">
          <img src=<?php {echo $row['Imagen'];}?> alt="">
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
      }
      sqlsrv_close( $conn_sis);
      }?>
      <!---------------------------------------------------------------->
      </div>
      </div>
    </div>
  </div>
</body>
</html>