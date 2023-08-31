<?php
		if(isset($_POST['TP_NewGame']))
		{	

			include("../php/conexion_sql_server.php");
			$Topos = $_POST['Topos'];
            
			if($Topos=="")
			{
				echo '<script type="text/javascript"> alertify.success("debes ingresar el no de topos");</script>';
				return false;
			} 
			$NJugadores = $_POST['numJugadores'];
			if($NJugadores=="")
			{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar el numero de jugadores");</script>';
				return false;
			} 			

			$Consulta = "Exec TP_generarJuego '".$Topos."', '".$NJugadores."'";
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    session_start();
                    $_SESSION['Codigo'] = $row['Descripcion'];
					$_SESSION['Topos'] = $Topos;
					$_SESSION['IPServ'] = $_POST['IPServ'];
                    echo ' <script type="text/javascript"> alertify.success("El codigo del juego es: '.$row['Descripcion'].'");</script>';
                    header('Location: TP_A_SalaEspera.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}
	?>