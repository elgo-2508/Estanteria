<?php
  $Codigo =$_SESSION['Codigo'];
  $Participante =$_SESSION['Participante'] ;
  $CordenadaX =$_SESSION['CordenadaX'] ;
  $CordenadaY =$_SESSION['CordenadaY'] ;
  $Tarjeta =$_SESSION['Tarjeta'] ;
  $CordenadaX2 =$_SESSION['CordenadaX2'] ;
  $CartasDisponibles =$_SESSION['CartasDisponibles'] ;
  if ($CordenadaX2==0)
  {
?>
<!---------------------------------------------------------------->
        <!--section class="section2" id="section2"-->
        <div class="card">
              <div class="face front">
                <img src="img/PC_Tarjeta.png" alt="">  
                <h3 class="textoMedio"><?php {echo $Tarjeta;}?></h3>
              </div>
              <div class="face back">
                  <h3>Defina accion</h3>
                  <button type='submit' class="btn btn-success btn-block height25" name='Aceptar'>Aprobada</button>
                  <br>
                  <button type='submit' class="btn btn-danger btn-block height25" name='Rechazar'>Rechazar</button>
              </div>
          </div>
        <!--/section-->
<!---------------------------------------------------------------->
<?php
  }
  else
  {  
        
        $CordenadaY2 =$_SESSION['CordenadaY2'] ;
        $Tarjeta2 =$_SESSION['Tarjeta2'] ;  
?>
        <div class="card">
              <div class="face front">
                <img src="img/PC_Tarjeta.png" alt="">  
                <h3 class="textoMedio"><?php {echo $Tarjeta;}?></h3>
              </div>
              <div class="face back">
                  <h3>Defina accion</h3>
                  <button type='submit' class="btn btn-success btn-block height25" name='Aceptar'>Aprobada</button>
                  <br>
                  <button type='submit' class="btn btn-danger btn-block height25" name='Rechazar'>Rechazar</button>
              </div>
          </div>
          <div class="card">
              <div class="face front">
                <img src="img/PC_Tarjeta.png" alt="">  
                <h3 class="textoMedio"><?php {echo $Tarjeta2;}?></h3>
              </div>
              <div class="face back">
                  <h3>Defina accion</h3>
                  <button type='submit' class="btn btn-success btn-block height25" name='Aceptar2'>Aprobada</button>
                  <br>
                  <button type='submit' class="btn btn-danger btn-block height25" name='Rechazar2'>Rechazar</button>
              </div>
          </div>      
<?php
  }
?>