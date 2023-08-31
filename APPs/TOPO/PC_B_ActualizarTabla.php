
<table  class="border border-5" style="font-size:20px; width:100%; text-align:center ">    
<?php
{
/*
function getRandomPastelColor() {
    $r = mt_rand(150,255);
    $g = mt_rand(150,255);
    $b = mt_rand(150,255);
    return "rgb($r, $g, $b)";
    }
    
    

$color = getRandomPastelColor();
*/
$color = sprintf('#%02X%02X%02X', mt_rand(150, 255), mt_rand(150, 255), mt_rand(150, 255));
//session_start();
$Codigo = $_SESSION['Codigo'];
include("../php/conexion_sql_server.php");
//$Consulta = "Exec [dbo].[PC_ActualizarTablero] '365C69'";
$Consulta = "Exec [dbo].[TP_ActualizarTablero] '".$Codigo."'";
//$params = array();
//$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);

$i=1;
while($row=sqlsrv_fetch_array($ejecutar)) 
{
        echo "<tr>";
        if ($i==1)
        {
        echo "<td style='background-color: #223366; color: #ffffff;'>";echo $row[0];echo "</td>";
        echo "<td >";echo $row[1];echo "</td>";
        echo "<td style='background-color: #223366; color: #ffffff;'>";echo $row[2];echo "</td>";
        echo "<td >";echo $row[3];echo "</td>";
        $i=$i+1;
        } 
        else if($i==2)
        {
        echo "<td >";echo $row[0];echo "</td>";
        echo "<td  style='background-color: #223366; color: #ffffff;'>";echo $row[1];echo "</td>";
        echo "<td >";echo $row[2];echo "</td>";
        echo "<td  style='background-color: #223366; color: #ffffff;'>";echo $row[3];echo "</td>";
        $i=1;
        } 
        echo "</tr>";    
}    



sqlsrv_close( $conn_sis);
}?>
</table>
