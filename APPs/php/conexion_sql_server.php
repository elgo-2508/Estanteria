<?php
	$serverName = 'DESKTOP-KFHTFDK\SQLEXPRESS2017';
	$connectionInfo = array("Database"=>"ElgoGames", "Uid"=>"devegiraldog", "PWD"=>"asdf1234","CharacterSet" => "UTF-8");
    
	$conn_sis = sqlsrv_connect($serverName, $connectionInfo);

	if(! $conn_sis) 	
	{
		echo "conexion Fallida";
		die ( Print_r(sqlsrv_errors(),true));
	}
?>