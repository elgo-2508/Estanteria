<?php
		if(isset($_POST['PC_NewGame']))
		{	

			include("../php/conexion_sql_server.php");
			$Tamaño = $_POST['tamaño'];
            
			if($Tamaño=="")
			{
				echo '<script type="text/javascript"> alertify.success("debes ingresar el tamaño");</script>';
				return false;
			} 
			$NJugadores = $_POST['numJugadores'];
			if($NJugadores=="")
			{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar el numero de jugadores");</script>';
				return false;
			} 			
			$DuracionPartida = $_POST['DuracionPartida'];
			if($DuracionPartida=="")
			{
				echo ' <script type="text/javascript"> alertify.success("debes ingresar la duracion en minutos");</script>';
				return false;
			} 			

			$Consulta = "Exec PC_generarJuego '".$Tamaño."', '".$DuracionPartida."'";
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    session_start();
                    $_SESSION['Codigo'] = $row['Descripcion'];
					$_SESSION['IPServ'] = $_POST['IPServ'];
                    echo ' <script type="text/javascript"> alertify.success("El codigo del juego es: '.$row['Descripcion'].'");</script>';
                    header('Location: PC_SalaEspera.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("Error al cargar el juego, ya existe otro en ejecucion");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}
	?>