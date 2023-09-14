<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen con Enlaces</title>
</head>
<body>
    <h1>Haz clic en la parte de la imagen que desees</h1>
    <img src="img/Portada.jpeg" alt="Tu Imagen" usemap="#enlaces">

    <map name="enlaces">
        <area shape="rect" coords="0,0,100,100" alt="Área 1" href="pagina1.html">
        <area shape="rect" coords="100,100,200,200" alt="Área 2" href="pagina2.html">
        <!-- Agrega más áreas según sea necesario -->
    </map>
</body>
</html>
