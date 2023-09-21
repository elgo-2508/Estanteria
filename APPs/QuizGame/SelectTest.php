
<?php
session_start();
$codigo = $_SESSION['Codigo'];
$_SESSION['Participante'] = "Admin";
include("admin/funciones.php");
aumentarVisita();
$categorias =  obtenerCategorias();
IniciarJuego($codigo,9);
header("Location: jugarAnfitrion.php");
?>