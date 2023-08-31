<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de barras</title>
    <?php require_once "../php/script.php"; ?>    
</head>
<body>
<?php
    session_start();
    $Codigo = $_SESSION['Codigo'];
?>           
    <div class="position-relative overflow-hidden p-3 p-md-1 m-md-1 text-center bg-light">    
        <div class="p-12 p-md-1 mb-1 text-white rounded bg-secondary">
            <div class="row g-0">
                <div class="col p-1 d-flex flex-column position-static">
                <h1 class="display-4 fw-normal">Quien es el topo? </h1> (<?php echo $Codigo;?>)
                </div>
                <div class="col-auto d-lg-block">
                <img class="me-3 bg-purple rounded shadow-sm" src="img/LogoSinFondo.png" alt="" height="100">
                </div>
            </div>
        </div>
        <canvas id="bar-chart" height="50" width="200"></canvas>
        <div class="p-12 p-md-2 mb-2 text-white rounded bg-dark">
            <div class="col-md-12 px-0">
            <?php require_once "TP_B_resultadoCierre.php"; ?>
            </div>
        </div>
    </div>

    <script>
        // Datos de ejemplo para el gráfico
        <?php
            $Codigo = $_SESSION['Codigo'];
            include("../php/conexion_sql_server.php");
            //$Consulta = "Exec [dbo].[PC_resultadoPartida] 'FA7604'";
            $Consulta = "Exec [dbo].[TP_resultadoPartida] '".$Codigo."'";
            
            $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
            $data = array();
            while($row=sqlsrv_fetch_array($ejecutar)) 
            {
                $data[] = $row;
            }

            sqlsrv_close( $conn_sis);       
        
        ?>

        // Crear el gráfico
        var ctx = document.getElementById("bar-chart").getContext("2d");
        var chart = new Chart(ctx, {
            type: "horizontalBar",
            data: {
                labels: [<?php foreach ($data as $d) echo '"' . $d[0] . '",'; ?>],
                datasets: [
                    {
                    label: "votos",
                    data: [<?php foreach ($data as $d) echo $d[1] . ','; ?>],
                    backgroundColor: "rgba(0, 50, 20, 0.4)",
                    borderColor: "rgba(75,192,192,1)",
                    }   
                    ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    
</body>
</html>