<div class="container-fluid">        
    <div class="col-xxl-5 d-flex">
        <!-- Card -->
        <div class="card border-0 flex-fill w-100">
            <div class="card-header border-0 card-header-space-between">
            <!-- Title -->
            <h2 class="card-header-title h4 text-uppercase">
                Parametrizar Categorias
            </h2>
            <!-- Table -->
            <div class="table-responsive">
                <table id="projectsTable" class="table align-middle table-edge table-nowrap mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th class="w-60px">#</th>
                            <th>Categoria</th>
                            <th>Pistas Cruzadas </th>
                            <th>TOPO </th>
                            <th class="text-end">Just One</th>
                        </tr>
                    </thead>
                    <tbody>
<?php
    // Conexión a la base de datos
    //include("../php/conexion_sql_server.php");

    // Verificar si se recibieron los datos del formulario
    if (isset($_POST['submit'])) {
        // Recibir los datos del formulario
        $PCchecklist = $_POST['PCList'];
        $TPchecklist = $_POST['TPList'];
        $JOchecklist = $_POST['JOList'];

        // Consolidar los registros marcados
        $dataPC = implode(", ", $PCchecklist);
        $dataTP = implode(", ", $TPchecklist);
        $dataJO = implode(", ", $JOchecklist);
        include("../php/conexion_sql_server.php");
        $Consulta = "Exec [dbo].[General_actualizaCheck] '".$dataPC."','".$dataTP."','".$dataJO."'";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
        echo ' <script type="text/javascript"> alertify.success("Se actualizaron de los dos de manera satisfactoria");</script>';

        // Insertar los datos en la tabla
        //$sql = "INSERT INTO checklist (items) VALUES ('$data')";
        //$conn->query($sql);
    }
?>

    <form method="post">
    <div class="mb-3 form-check">        
    <?php
      include("../php/conexion_sql_server.php");
      $Consulta = "SELECT [tipo],[PC],[TP],[JO]  FROM [dbo].[General_TiposPalabras]";
      $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
      $i=1;
      while($row=sqlsrv_fetch_array($ejecutar)) 
        {
    ?>


        <tr>
        <td><?php echo $i;?></td>
        <td><label for="item1" class="form-check-label"><?php echo $row['tipo'];?></label></td>
        <td class="text-muted"><input type="checkbox" <?php if ($row['PC'] ==1) {echo 'checked';} ?>  name="PCList[]" value=<?php echo $row['tipo']; ?> id=<?php echo $row['tipo']; ?>></td>
        <td class="text-muted"><input type="checkbox" <?php if ($row['TP'] ==1) {echo 'checked';} ?> name="TPList[]" value=<?php echo $row['tipo']; ?> id=<?php echo $row['tipo']; ?>></td>
        <td class="text-end"><input type="checkbox" <?php if ($row['JO'] ==1) {echo 'checked';} ?> name="JOList[]" value=<?php echo $row['tipo']; ?> id=<?php echo $row['tipo']; ?>></td>
        </tr>
    <?php
        $i=$i+1;
    }
    ?>

				</tbody>
			</table>
		</div> <!-- / .table-responsive -->

        </div> 
        <input type="submit" class="btn btn-secondary" name="submit" value="Actualizar">
    </div>
</div>
</div> 

    </form>
