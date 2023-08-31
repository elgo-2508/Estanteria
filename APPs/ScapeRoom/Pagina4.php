<!DOCTYPE html>
<html>
<head>
  <title>Captura de código con Bootstrap</title>
  <!-- Incluir los archivos CSS de Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:#8D15D6;">
  <div class="container mt-5">
    <h1 class="text-center">Codigo 2 estante</h1>
    <div class="row justify-content-center mt-3">
      <div class="col-md-12">
        <form>
          <div class="form-row">
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="digito1" maxlength="1" required>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="digito2" maxlength="1" required>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="digito3" maxlength="1" required>
            </div>
            <div class="form-group col-md-3">
              <input type="text" class="form-control" id="digito4" maxlength="1" required>
            </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn btn-primary" onclick="validarCodigo()">Validar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Incluir los archivos JavaScript de Bootstrap y el código personalizado -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Función para validar el código ingresado
    function validarCodigo() {
      var digito1 = document.getElementById('digito1').value;
      var digito2 = document.getElementById('digito2').value;
      var digito3 = document.getElementById('digito3').value;
      var digito4 = document.getElementById('digito4').value;
      
      var codigo = digito1 + digito2 + digito3 + digito4;

      if (codigo.length !== 4) {
        alert('El código debe tener exactamente 4 dígitos.');
        return;
      }
      if (isNaN(codigo)) {
        alert('El código debe ser un número.');
        return;
      }
      if (codigo === '7425') {
        alert('Código correcto.');
      } else {
        alert('Código incorrecto.');
      }
    }
  </script>
</body>
</html>
