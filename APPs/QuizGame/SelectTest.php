
<?php
session_start();
$codigo = $_SESSION['Codigo'];
include("admin/funciones.php");
aumentarVisita();
$categorias =  obtenerCategorias();
IniciarJuego($codigo,9);
header("Location: jugarAnfitrion.php");
?>