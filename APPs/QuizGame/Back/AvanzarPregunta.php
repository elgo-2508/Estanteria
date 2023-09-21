<?php
  session_start();
  include("../admin/funciones.php");
  $Codigo = $_SESSION['Codigo'];
  $Participante = $_SESSION['Participante'];
  $_SESSION['usuario'] = $Participante;
  $_SESSION['idCategoria'] = 9;
  //obtener siguente pregunta
  $confi =RetornarSiguentePregunta($Codigo);
  $Consecutivo= $confi['consecutivo'];
  if ($Consecutivo == 22 )
  {
    header("Location: ../jugarAnfitrion.php");
  }
  else
  {
    $elementos = explode(',', $confi['preguntas']);
    $preguntaActual = $_SESSION['Pregunta'];
    $_SESSION['Pregunta'] =  $elementos[$Consecutivo+1];    
    AvanzarNextPregunta($Codigo,$preguntaActual, $Consecutivo+1);
    header("Location: ../jugarAnfitrion.php");
  }
  exit;
  
?>