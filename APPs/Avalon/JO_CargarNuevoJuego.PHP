<?php
		if(isset($_POST['JO_NewGame']))
		{	
			include("../php/conexion_sql_server.php");
			$NJugadores = $_POST['numJugadores'];
			if($NJugadores=="")
			{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar el numero de jugadores");</script>';
				return false;
			} 			

			$Consulta = "Exec JO_generarJuego '".$NJugadores."'";
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    session_start();
                    $_SESSION['Codigo'] = $row['Descripcion'];
					$_SESSION['IPServ'] = $_POST['IPServ'];
                    echo ' <script type="text/javascript"> alertify.success("El codigo del juego es: '.$row['Descripcion'].'");</script>';
                    header('Location: JO_A_SalaEspera.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}
	?>