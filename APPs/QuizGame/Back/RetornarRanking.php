
<?php
session_start();
$Codigo = $_SESSION['Codigo'];
$Consulta = "select 
 ROW_NUMBER() OVER (ORDER BY sum(puntos) DESC) AS consecutivo,
 participante, sum(puntos) puntos from respuestas
 where codigo = '".$Codigo."'
 group by participante
 order by 3 desc
 LIMIT 5;";
include ("admin/conexion.php");	
$ejecutar = $conn->query($Consulta);			
while($row= $ejecutar->fetch_assoc()) 
{
echo '<li>';
echo '<div class="hidden" id="div3">';
echo '<div class="row g-12">';
echo '<div class="col-12 col-lg-3">';
echo '<div class="avatar avatar-xl">';
echo '<div class="avatar-name rounded-circle"><span>'.$row['consecutivo'].'</span></div>';
echo '</div>';
echo '</div>';
echo '<div class="col-12 col-lg-6">';
echo '<h3>'.$row['participante'].'</h3>';
echo '</div>';
echo '<div class="col-12 col-lg-3">';
echo '<h3>'.$row['puntos'].'p</h3>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</li>';
}
$conn->close();
?>