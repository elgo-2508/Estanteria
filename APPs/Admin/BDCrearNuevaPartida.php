<?php
			session_start();
			$Juego = $_SESSION['floatingSelectGame'];
			$NJugadores = $_SESSION['floatingInputJugadores'];			
			$IP = $_SESSION['floatingInputIP'];			
			$Duracion = $_SESSION['floatingInputDuracion'];			
			if($Juego=="")
			{
				echo '<script type="text/javascript"> alertify.success("debes ingresar el juego a realizar");</script>';
				return false;
			} 
			if($NJugadores=="")
			{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar el numero de jugadores");</script>';
				return false;
			} 			
			include($_SERVER['DOCUMENT_ROOT'] ."/estanteria/APPs/php/conexion_mysql.php");
			$Consulta = "Call RegistrarNuevoJuego ('".$Juego."', '".$NJugadores."', '".$IP."', '".$Duracion."');";
      $ejecutar = $conn_sis->query($Consulta);
			$i=1;
			while($row= $ejecutar->fetch_assoc())
			{
				if ($row['NumError']==0)
				{
						session_start();
						$_SESSION['Codigo'] = $row['Descripcion'];
						$_SESSION['Topos'] = $NJugadores;
						$_SESSION['IPServ'] = $IP;
						$_SESSION['Game'] = $Juego;
						$_SESSION['PathSalaEspera'] = $row['PathSalaEspera'];
						echo ' <script type="text/javascript"> alertify.success("El codigo del juego es: '.$row['Descripcion'].'");</script>';
						header('Location: SalaEspera.php');
				}
				else
				{
						echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';
				}
			$i=$i+1;
			}		
			$conn_sis->close();
	?>