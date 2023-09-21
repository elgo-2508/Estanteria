?<?php
			session_start();
			include("../admin/funciones.php");
			$_SESSION['RespuestaActual']='FueraTiempo';
			$Codigo=  $_SESSION['Codigo'];
			$Participante=  $_SESSION['Participante'];
			registrarpuntaje($Codigo, $Participante,$_SESSION['Pregunta'],'', 0);
			header("Location: ../Resultado.php");
			exit;
?>