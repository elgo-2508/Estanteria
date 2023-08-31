<?php
$servername = "localhost"; // Nombre del servidor de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "giraldgames"; // Nombre de la base de datos

// Crear la conexión
$conn_sis = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn_sis->connect_error) {
    die("Error en la conexión: " . $conn_sis->connect_error);
}

//echo "Conexión exitosa a la base de datos.";

// Aquí puedes realizar tus operaciones en la base de datos

?>