<?php {

    
session_start();
    //$Codigo = '04F5B1';
    $Codigo = $_SESSION['Codigo'];    

    function getRandomPastelColor() {
        $r = mt_rand(150,255);
        $g = mt_rand(150,255);
        $b = mt_rand(150,255);
        return "rgb($r, $g, $b)";
      }

    include($_SERVER['DOCUMENT_ROOT'] ."/Estanteria/APPs/php/conexion_mysql.php");
    $Consulta = "Call CargarParticipantes ('".$Codigo."');";
    $ejecutar = $conn_sis->query($Consulta);
    $i=1;
    echo "<center><h4>participantes inscritos: ". $ejecutar->num_rows ."</h4></center>";
    echo "<form class='p-4 p-md-4 border rounded-3 bg-light'>";
    echo "<div class='row row-cols-1 row-cols-md-2 text-center'>";

    while($row= $ejecutar->fetch_assoc())
    {
        echo "<div class='col'>";
        echo "<div class='card mb-4 rounded-3 shadow-sm'>";
        $color = getRandomPastelColor();
        echo "<div class='p-2' style='background-color:$color;'>";echo $row['Participante'];echo "</div>";
        echo "</div>";
        echo "</div>"; 
        $i=$i+1;
    }		
    echo "</div>";
    echo "</form>";		

    
    $conn_sis->close();
}?>