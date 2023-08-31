<?php      

		$Codigo = "C12DEA";
		$IPServ = "192.168.6.1";
		$dir = 'Temp/';
		if (!file_exists($dir))
				mkdir($dir);

		$filename =$dir.'Codigo.png';
		$tamano = 5;
		$lever = 'M';
		$frameSize = 3;
		$contenido = 'http://'.$IPServ.'/GiraldGame/TOPO/TP_P_Ingreso.php?Codigo='.$Codigo.'';
		QRcode::png($contenido,$filename,$lever,$tamano,$frameSize);                    
?>
