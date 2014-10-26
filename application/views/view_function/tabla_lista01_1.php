<table  class="display table table-bordered table-striped" id="dynamic-table">
    <thead>
    <th>Nombre</th>
    <th>Estado</th>
    <th>Detalles</th>
    <?php
    if (isset($administrador)) {
        echo "<th>Acciones</th>";
        echo "<th>Crear</th>";
        echo "<th>Descargas</th>";
    }
    ?>
</thead>
<tbody>
    <?php
    date_default_timezone_set('America/Santo_Domingo');
    if (!isset($administrador)) {
        $slis = $this->db->where('user_id', $this->user->id_cliente);
    }
    if (isset($_POST['user_id_seach'])) {
        $val = $_POST['user_id_seach'];
        $slis = $this->db->where('user_id', $val);
    }
    $slis = $this->db->get('solicitudes');
    foreach ($slis->result() as $row) {
        echo "<tr>";
        echo "<td>" . $row->nombre . "</td>";
        echo "<td>";
        if (empty($row->estado)) {
            echo "<span class='text-success'>Aprobada</span>";
        } else {
            echo $row->estado;
        }
        echo "</td>";
        echo '<td><!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal' . $row->id_sold . '">
  Ver
</button>

<!-- Modal -->
<div class="modal fade" id="myModal' . $row->id_sold . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles</h4>
      </div>
      <div class="modal-body">
      ';
        $imges = $this->db->where('css', $row->key_img);
        $imges = $this->db->get('img_solicitud');
        foreach ($imges->result() as $transfer):
            echo "<img style='width: 100%;' src='" . $transfer->img . "'/>";
        endforeach;
        echo'
      <ul class="list-group col-md-3">
        <li class="list-group-item">Categoria: </li>
        <li class="list-group-item">..........</li>
        <li class="list-group-item">Costo:</li>
        <li class="list-group-item">Fechas:</li>
        <li class="list-group-item">..........</li>
        <li class="list-group-item">Restrinciones</li>    
      </ul>    
      <ul class="list-group col-md-7">
        <li class="list-group-item">' . $row->categoria . '</li>
        <li class="list-group-item">Descripci&oacute;n: ' . $row->descripcion . '</li>
        <li class="list-group-item">' . $row->costo . '</li>
        <li class="list-group-item">Inicia en ' . $row->inicia . ' y finaliza en ' . $row->finaliza . '</li>
        <li class="list-group-item">' . $row->hora . ':' . $row->minuto . ' ' . $row->horario . '</li>
        <li class="list-group-item">' . $row->restrincion . '</li>    
      </ul>
      </div>
      <div class="modal-footer">
          <p class="text-info"></p>
      </div>
    </div>
  </div>
</div></td>';
        if (isset($administrador)) {
            if (empty($row->estado)) {
                echo "<th><a class='btn btn-warning' href='APDS?DS=" . $row->id_sold . "'>En espera</a><a class='btn btn-danger' href='APDS?PR=" . $row->id_sold . "'>NO permitir</a></th>";
            } else {
                echo "<th><a class='btn btn-success' href='APDS?AP=" . $row->id_sold . "'>Aprobar</a><a class='btn btn-danger' href='APDS?PR=" . $row->id_sold . "'>NO permitir</a></th>";
            }
            echo "<th>";
            if($row->estado == ""){
                echo form_open('in/newcampaign');
            echo form_hidden('exportado', $row->id_sold);
            $data = array(
                'name' => 'go',
                'class' => 'btn btn-danger',
                'value' => 'true',
                'type' => 'submit',
                'content' => 'Crear ahora'
            );
            echo form_button($data);
            echo form_close();
            }else{
                echo "Esperando... aprobacion.";
            }
            echo "</th>";
            echo "<th><a class='btn btn-info' href='".  site_url("descargas/pdf?d=$row->id_sold")."'>PDF</a></th>";
            
        }
        echo "</tr>";
    }
    ?>
</tbody>
</table>

<?php
if (isset($_GET['AP'])) {
    $datos = array(
        'estado' => ""
    );
    $this->db->where('id_sold', $_GET['AP']);
    $this->db->update('solicitudes', $datos);
    redirect('in/APDS');
} else if (isset($_GET['DS'])) {
    $datos = array(
        'estado' => "En espera..."
    );
    $this->db->where('id_sold', $_GET['DS']);
    $this->db->update('solicitudes', $datos);
    redirect('in/APDS');
} else if (isset($_GET['PR'])) {
    $datos = array(
        'estado' => "<span class='text-danger'>NO Aprobada</span>"
    );
    $this->db->where('id_sold', $_GET['PR']);
    $this->db->update('solicitudes', $datos);
    redirect('in/APDS');
}
?>