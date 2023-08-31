
<table class="table table-striped">
<tr>
    <th scope="col">#</th>
    <th scope="col"></th>
    <th scope="col">A</th>
    <th scope="col">B</th>
    <th scope="col">C</th>
    <th scope="col">D</th>
    <th scope="col">E</th>
</tr>        
<?php
{
session_start();
$Codigo = $_SESSION['Codigo'];
include("../php/conexion_sql_server.php");
//$Consulta = "Exec [dbo].[PC_ActualizarTablero] '365C69'";
$Consulta = "Exec [dbo].[PC_ActualizarTablero] '".$Codigo."'";
//$params = array();
//$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$ejecutar = sqlsrv_query ($conn_sis, $Consulta);

$i=1;
while($row=sqlsrv_fetch_array($ejecutar)) 
{
    if ($i==1)
    {
        echo "<tr>";
        echo "<th scope='col'></th>";
        echo "<th scope='col'></th>";
        echo "<th scope='col'>";echo $row['CAMPO1'];"</th>";
        echo "<th scope='col'>";echo $row['CAMPO2'];"</th>";
        echo "<th scope='col'>";echo $row['CAMPO3'];"</th>";
        echo "<th scope='col'>";echo $row['CAMPO4'];"</th>";
        echo "<th scope='col'>";echo $row['CAMPO5'];"</th>";
        echo "</tr>";        
    }
    else 
     {
        echo "<tr>";
        echo "<th scope='col'>";echo $i-1;"</th>";
        echo "<th scope='col'>";echo $row[0];"</th>";
        echo "<td>";echo $row[1];"</td>";
        echo "<td>";echo $row[2];"</td>";
        echo "<td>";echo $row[3];"</td>";
        echo "<td>";echo $row[4];"</td>";
        echo "<td>";echo $row[5];"</td>";
        echo "</tr>";        
    }
    $i=$i+1;
}    



sqlsrv_close( $conn_sis);
}?>
</table>
