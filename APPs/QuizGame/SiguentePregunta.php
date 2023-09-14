<?php
  session_start();
		//obtener siguente pregunta
		//actualizo estado para continuar las preguntas
    $Codigo = 'ASDFG';//$_SESSION['Codigo'];
    $Participante = 'Elgo';//$_SESSION['Participante'];
    $_SESSION['usuario'] = $Participante;;
    $_SESSION['idCategoria'] = 9;
    $_SESSION['Pregunta'] = 15;    
    header("Location: jugarAnfitrion.php");
    exit;
  
?>