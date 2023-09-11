<?php
// Verifica si se proporcionó el parámetro 'codigo' en la URL
if(isset($_GET['codigo'])) {
		session_start();	
		$_SESSION['Codigo'] = $_GET['codigo'];
		//con el codigo busco el juego
		$juego = "Dixit";
    switch($juego) {
        case 'Dixit':
            // Redirecciona a la página correspondiente
            header("Location: ../dixit/Pages/F_A_Tablero.php");
            exit(); // Asegura que el script se detenga después de la redirección
            break;
        case 'JustOne':
            header("Location: pagina_opcion2.php");
            exit();
            break;
        case 'PalabrasCruzadas':
            header("Location: pagina_opcion3.php");
            exit();
            break;
        // Agrega más casos según sea necesario
        default:
            // En caso de que el código no coincida con ninguna opción conocida
            echo "Código no válido";
            break;
    }
}
else {
    // Si el parámetro 'codigo' no se proporcionó
    echo "No se proporcionó un código";
}
?>