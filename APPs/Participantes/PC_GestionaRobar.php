<?php
    if(isset($_POST['NewCard']))
    {	
      $Codigo = $_SESSION['Codigo'];
      $participante = $_SESSION['Participante'];
      include("../php/conexion_sql_server.php");
      $Consulta = "Exec [dbo].[PC_SolicitarCard] '".$Codigo."','".$participante."'";
      $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
      while($row=sqlsrv_fetch_array($ejecutar)) 
      {
          if ($row['NumError']==2)
          {
            $array = explode("|", $row['Descripcion']);
            $_SESSION['Codigo'] = $Codigo;
            $_SESSION['Participante'] = $Participante;
            $_SESSION['CordenadaX'] = $array[2];
            $_SESSION['CordenadaY'] = $array[3];
            $_SESSION['Tarjeta'] = $array[1];
            $_SESSION['CordenadaX2'] = $array[5];
            $_SESSION['CordenadaY2'] = $array[6];
            $_SESSION['Tarjeta2'] = $array[4];    
            $_SESSION['CartasDisponibles'] = $array[7];        
            header('Location: PC_tarjeta.php');
          }
          else if ($row['NumError']==1)
          {
            $array = explode("|", $row['Descripcion']);
            $_SESSION['Codigo'] = $Codigo;
            $_SESSION['Participante'] = $Participante;
            $_SESSION['CordenadaX'] = $array[2];
            $_SESSION['CordenadaY'] = $array[3];
            $_SESSION['Tarjeta'] = $array[1];
            $_SESSION['CartasDisponibles'] = $array[7];
            $_SESSION['CordenadaX2'] = $array[5];
            $_SESSION['CordenadaY2'] = $array[6];
            $_SESSION['Tarjeta2'] = $array[4];              

            header('Location: PC_tarjeta.php');
          }
          else if ($row['NumError']==0)          
          {
            echo "<script type='text/javascript'> 
            Swal.fire({
              title: 'El Juego ha Finalizado?',
              text: 'A continuación se mostraran los resultados!',
              icon: 'warning',
              showCancelButton: false,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ver resultados!'
              }).then((result) => {
              if (result.isConfirmed) {
                window.location.href = '../Anfitrion/PC_cierre.php';
             j }
              });
            </script>";
             //echo ' <script type="text/javascript"> alertify.success("'.$row['Descripcion'].'");</script>';
          }          
          else
          {
            echo ' <script type="text/javascript"> alertify.success("Error al cargar el registro");</script>';
          }
      }
      sqlsrv_close( $conn_sis);
    }
  ?>	