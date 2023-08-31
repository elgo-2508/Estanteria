<?php
	if(isset($_POST['IniciarJuego']))
	{	
		echo '<script type="text/javascript"> alertify.success("ingreso aqui");</script>';
		header('Location: ../PistaCruzada/PC_accion.php');
	}
?>