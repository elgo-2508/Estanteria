


<table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Asignado</th>
          <th scope="col">Estado</th>
          <th scope="col">Validado</th>
          <th scope="col">Cancelar</th>
        </tr>
      </thead>
      <tbody>
    <?php
        include("../php/conexion_sql_server.php");
        $Consulta = "Exec [dbo].[JO_EstadoPartida] '316394'";
        $ejecutar = sqlsrv_query ($conn_sis, $Consulta);
        $i=1;
        while($row=sqlsrv_fetch_array($ejecutar)) 
        {
    ?>

        <tr>
          <td><?php echo $row['Participante'];?></td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox"  <?php if ($row['Asignado'] ==1) {echo 'checked';} ?> id="estadoA[]">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox"  <?php if ($row['Estado'] ==1) {echo 'checked';} ?> id="estadob[]">
            </div>
          </td>
          <td>
            <div class="form-check">
              <input class="form-check-input" type="checkbox"  <?php if ($row['Validacion'] ==1) {echo 'checked';} ?> id="estadoc[]">
            </div>
          </td>
          <td>
            <button class="btn btn-danger">Cancelar</button>
          </td>
        </tr>


    <?php
        $i=$i+1;
        }
    ?>

      </tbody>
    </table>