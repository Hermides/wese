<table  class="display table table-bordered table-striped" id="dynamic-table">
    <thead>
    <th>Empresa</th>
    <th>Email</th>
    <th>Web</th>
    <th>Tel</th>
    <th>Direcci&oacute;n</th>
    <th>Creado</th>
    <th>Acciones</th>
</thead>
<tbody>
    <?php
    /* function form($d) { */
    $data = array(
        'name' => 'button',
        'id' => 'button',
        'value' => 'true',
        'type' => 'submit',
        'content' => 'Ver solicitudes'
    ); /*
      echo form_open('in/APDS');
      echo form_hidden('user_id_seach', $d);
      echo form_button($data);
      echo form_close();
      } */

    $lista = $this->db->get('clientes');
    foreach ($lista->result() as $row) {
        echo "<tr>";
        echo "<td>$row->Empresa</td>";
        echo "<td>$row->Email</td>";
        echo "<td>$row->Web</td>";
        echo "<td>$row->Tel</td>";
        echo "<td>$row->direccion</td>";
        echo "<td>$row->creado</td>";
        echo "<td>";
        echo form_open('in/APDS');
        echo form_hidden('user_id_seach', $row->id_cliente);
        echo form_button($data);
        echo form_close();
        echo "</td>";
        echo "</tr>";
    }
    ?>
</tbody>
</table>