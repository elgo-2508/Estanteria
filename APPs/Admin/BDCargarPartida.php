<?php
			session_start();
			$Juego = $_SESSION['floatingSelectGame'];
			include($_SERVER['DOCUMENT_ROOT'] ."/estanteria/APPs/php/conexion_mysql.php");
			$Consulta = "Call CargarJuegoActivo ('".$Juego."');";
      $ejecutar = $conn_sis->query($Consulta);
			$i=1;
			while($row= $ejecutar->fetch_assoc())
			{
				if ($row['NumError']==0) //partida en sala de espera
				{
						session_start();
						$_SESSION['Codigo'] = $row['Descripcion'];
						$_SESSION['Topos'] = $NJugadores;
						$_SESSION['IPServ'] = $IP;
						$_SESSION['Game'] = $Juego;
						echo ' <script type="text/javascript"> alertify.success("El codigo del juego es: '.$row['Descripcion'].'");</script>';
						header('Location: SalaEspera.php');
				}
				else if ($row['NumError']==0) //partida en ejecucion
				{
						echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';
				}
				else //partida finalizada
				{
						echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';
				}
			$i=$i+1;
			}		
			$conn_sis->close();
	?>