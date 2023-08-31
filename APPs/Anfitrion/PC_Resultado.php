<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
  //Incluir la librería
  include("../Librerias/pChart/class/pData.class.php");
  include("../Librerias/pChart/class/pDraw.class.php");
  include("../Librerias/pChart/class/pImage.class.php");

  //Crear una nueva instancia de la clase pData
  $myData = new pData();

  //Agregar los datos al gráfico
  $myData->addPoints(array(1,2,3,4,5),"Product A");
  $myData->addPoints(array(1,4,2,6,3),"Product B");
  $myData->setAxisName(0,"Ventas");
  $myData->addSeries("Product A");
  $myData->addSeries("Product B");
  $myData->setAbscissa("Product A");

  //Crear una nueva instancia de la clase pChart
  $myPicture = new pImage(700,230,$myData);

  //Crear un gráfico de barras
  $settings = array("R"=>170, "G"=>183, "B"=>87, "Dash"=>1, "DashR"=>190, "DashG"=>203, "DashB"=>107);
  $myPicture->drawBarChart($settings);

  //Mostrar el gráfico
  $myPicture->stroke();
?>


</body>
</html>