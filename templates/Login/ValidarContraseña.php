<?php
session_start();
// Recibir los datos del formulario
$email = $_POST['email'];
$clave = $_POST['password'];

if (validarEntrada($email) && validarEntrada($clave)) {
	// Los datos son válidos, continuar con el procesamiento
	include("../../APPs/php/conexion_mysql.php");
	// Consulta para verificar el inicio de sesión
	$Consulta = "SELECT id, nombre FROM usuarios WHERE email = '$email' AND contraseña = '$clave'";
	$ejecutar = $conn_sis->query($Consulta);
	
	if ($ejecutar->num_rows == 1) {
			// Inicio de sesión exitoso
			$row = $ejecutar->fetch_assoc();
			$_SESSION['usuario_id'] = $row['id'];
			$_SESSION['usuario_nombre'] = $row['nombre'];
			$token = bin2hex(random_bytes(32));
			$_SESSION['token'] = $token;
			header('Location:../Estanteria/Estanteria.php'); // Redirige al panel de control o página de inicio
	} else {
			// Inicio de sesión fallido
			header('Location: OlvidoClave.php'); 
			// Redirige al formulario de inicio de sesión con un mensaje de error
	}
	
	// Cerrar la conexión a la base de datos
	$conn_sis->close();


} 
else 
{
	// Los datos contienen caracteres inválidos, mostrar un mensaje de error
	// Inicio de sesión fallido
	header('Location: OlvidoClave.php'); // Redirige al formulario de inicio de sesión con un 	
	echo "Los datos ingresados contienen caracteres inválidos.";
}

function validarEntrada($entrada) {
	// Definir una expresión regular para permitir solo letras, números y algunos caracteres seguros
	$patron = '/^[a-zA-Z0-9@._-]*$/';
	
	// Realizar la validación utilizando la función preg_match
	if (preg_match($patron, $entrada)) {
			return true; // La entrada es válida
	} else {
			return false; // La entrada contiene caracteres inválidos
	}
}

?>
