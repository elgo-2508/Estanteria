<html>
<head>
    <title>Recibir parámetros</title>
</head>
<body>
    <form>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" readonly><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" readonly><br>
    </form>
    <script>
        var params = new URLSearchParams(window.location.search);
        document.getElementById("name").value = params.get("name");
        document.getElementById("email").value = params.get("email");
    </script>
</body>
</html>
