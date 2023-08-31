<?php
		if(isset($_POST['Aceptar']))
		{	
            session_start();
            
			$Codigo = $_SESSION['Codigo'];
            $Estado = 'Abierta';//$_POST['tamaño'];
            //$CordenadaX = 1; //$_POST['tamaño'];
            //$CordenadaY = 1; //$_POST['tamaño'];
            include("../php/conexion_sql_server.php");
			$Consulta = "Exec PC_GestionarCard '".$Codigo."','".$Estado."',".$CordenadaY.",".$CordenadaX."";
            //$params = array()-;
            //$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    header('Location: PC_Robar.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("Error al Actualizar, intente nuevamente");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}
		if(isset($_POST['Rechazar']))
		{	
            session_start();
            
			$Codigo = $_SESSION['Codigo'];
            $Estado = 'Descartada';//$_POST['tamaño'];
            //$CordenadaX = 2; //$_POST['tamaño'];
            //$CordenadaY = 2; //$_POST['tamaño'];
            include("../php/conexion_sql_server.php");
			$Consulta = "Exec PC_GestionarCard '".$Codigo."','".$Estado."',".$CordenadaY.",".$CordenadaX."";
            //$params = array();
            //$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    header('Location: PC_Robar.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("Error al Actualizar, intente nuevamente");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}      
		if(isset($_POST['Aceptar2']))
		{	
            session_start();
            
			$Codigo = $_SESSION['Codigo'];
            $Estado = 'Abierta';//$_POST['tamaño'];
            //$CordenadaX = 1; //$_POST['tamaño'];
            //$CordenadaY = 1; //$_POST['tamaño'];
            include("../php/conexion_sql_server.php");
			$Consulta = "Exec PC_GestionarCard '".$Codigo."','".$Estado."',".$CordenadaY2.",".$CordenadaX2."";
            //$params = array()-;
            //$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    header('Location: PC_Robar.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("Error al Actualizar, intente nuevamente");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}
		if(isset($_POST['Rechazar2']))
		{	
            session_start();
            
			$Codigo = $_SESSION['Codigo'];
            $Estado = 'Descartada';//$_POST['tamaño'];
            //$CordenadaX = 2; //$_POST['tamaño'];
            //$CordenadaY = 2; //$_POST['tamaño'];
            include("../php/conexion_sql_server.php");
			$Consulta = "Exec PC_GestionarCard '".$Codigo."','".$Estado."',".$CordenadaY2.",".$CordenadaX2."";
            //$params = array();
            //$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
			while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                if ($row['NumError']==0)
                {
                    header('Location: PC_Robar.php');
                }
                else
                {
                    echo ' <script type="text/javascript"> alertify.success("Error al Actualizar, intente nuevamente");</script>';
                }
            }
            sqlsrv_close( $conn_sis);
		}            
	?>