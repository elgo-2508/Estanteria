<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Código de Verificación</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
  body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url('FotosTv/Candado.webp');
    background-size: cover;
    background-position: center;
    font-family: Arial, sans-serif;
  }
  #container {
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    text-align: center;
  }
</style>
</head>
<body>
  <div id="container">
    <h2>Verificación de Código</h2>
    <input type="text" id="codigoInput" placeholder="Ingrese el código de 4 Digitos" maxlength="4">
    <button onclick="validarCodigo()">Validar Código</button>
  </div>
  
  <script>
    function validarCodigo() {
      var codigoIngresado = document.getElementById('codigoInput').value.toUpperCase();
      
      if (codigoIngresado === '4693') {
        Swal.fire({
          icon: 'success',
          title: 'Código correcto',
          text: '¡Acceso concedido!'
        }).then(() => {
          window.location.href = 'VideosTv/puerta-2.mp4'; // Cambia esto a la ruta de la otra página
        });
      } else if (codigoIngresado === '') {
        Swal.fire({
          icon: 'warning',
          title: 'Código incorrecto',
          text: 'Por favor, ingrese un código.'
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Código incorrecto',
          text: 'Acceso denegado.'
        });
      }
    }
  </script>
</body>
</html>
