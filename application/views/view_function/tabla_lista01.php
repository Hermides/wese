<table  class="display table table-bordered table-striped" id="dynamic-table">
    <thead>
    <th>Nombre</th>
    <th>Estado</th>
    <th>Creado</th>
    <th>Inicio de camp</th>
    <th>Finaliza la camp</th>
    <th>Mas</th>
</thead>
<tbody>
    <?php
    date_default_timezone_set('America/Santo_Domingo');
    if (!empty($registro)) {
        foreach ($registro as $row) {
            $img = $this->db->where('nombre_camp', $row->nombre);
            $img = $this->db->like('user_id', $this->user->id, 'both');
            $img = $this->db->get('img_camp');
            foreach ($img->result() as $img_camp) {
                
            }
            if ($row->estado != "true") {
                $ft = "Esperando";
            } else {
                $ft = "Activa";
            }
            if (isset($_GET['3e65c7bf36ed548aa9a56e21f03c698f'])) {
                if ($row->estado != 'true') {
                    echo "<tr>";
                    echo "<td>" . $row->nombre . "</td>";
                    echo "<td>" . $ft . "</td>";
                    echo "<td>" . $row->creado . "</td>";
                    echo "<td>" . $row->inicia . "</td>";
                    echo "<td>" . $row->termina . "</td>";
                    echo "<td><a data-toggle='modal' data-target='#myModal$row->id' href='#'>Detalles</a></td>";
                    echo "</tr>";
                    $dias = (strtotime($row->inicia) - strtotime($row->termina)) / 86400;
                    $dias = abs($dias);
                    $dias = floor($dias);
                    if ($row->estado != 'true') {
                        $estu = "Inactiva";
                    } else {
                        $estu = "Activa";
                    }
                    echo '<!-- Modal -->
<div class="modal fade" id="myModal' . $row->id . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Detalles</h4>
            </div>
            <div style="height: 400px;" class="modal-body">';
                    echo'
                <section class = "panel">
                <div class = "panel-body">
                <div class = "col-md-6">
                <div class = "pro-img-details">';
                    if (!empty($img_camp->img)) {
                        echo '<img class = "img-thumbnail detall_img" src = "' . base_url() . $img_camp->img . '"/>';
                    }
                    echo '</div>
                </div>
                <div class = "col-md-6">
                <h4 class = "pro-d-title">
                <a href = "#" class = "">';
                    echo '<p>' . @$img_camp->nombre_camp . '</p>';
                    echo '</a>
                </h4>
                <p>
                ' . @$img_camp->descripcion . '
                </p>
                <div class = "m-bot15"> <strong>Dias y estadisticas: </strong> <span class = "pro-price">En ' . $dias  .' d&iacute;as ';  
                    echo ' Se esperan un minimo de '. number_format($totalclick = $dias * 100) . ' Vistas';
                    echo '</span></div>

                </div>
                </div>
                </section>

                </div>
                </div>
                </div>
                </div>
                </div>';
                }
            } else if (isset($_GET['4756f705eb327b2fae0d9108b69bc7d5'])) {
                if ($row->estado != 'false') {
                    echo "<tr>";
                    echo "<td>" . $row->nombre . "</td>";
                    echo "<td>" . $ft . "</td>";
                    echo "<td>" . $row->creado . "</td>";
                    echo "<td>" . $row->inicia . "</td>";
                    echo "<td>" . $row->termina . "</td>";
                    echo "<td><a data-toggle='modal' data-target='#myModal$row->id' href='#'>Detalles</a></td>";
                    echo "</tr>";
                    $dias = (strtotime($row->inicia) - strtotime($row->termina)) / 86400;
                    $dias = abs($dias);
                    $dias = floor($dias);
                    if ($row->estado != 'true') {
                        $estu = "Inactiva";
                    } else {
                        $estu = "Activa";
                    }
                    echo '<!-- Modal -->
<div class="modal fade" id="myModal' . $row->id . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Detalles</h4>
            </div>
            <div style="height: 400px;" class="modal-body">';
                    echo'
                <section class = "panel">
                <div class = "panel-body">
                <div class = "col-md-6">
                <div class = "pro-img-details">';
                    if (!empty($img_camp->img)) {
                        echo '<img class = "img-thumbnail detall_img" src = "' . base_url() . $img_camp->img . '"/>';
                    }
                    echo '</div>
                </div>
                <div class = "col-md-6">
                <h4 class = "pro-d-title">
                <a href = "#" class = "">';
                    echo '<p>' . @$img_camp->nombre_camp . '</p>';
                    echo '</a>
                </h4>
                <p>
                ' . @$img_camp->descripcion . '
                </p>
                <div class = "m-bot15"> <strong>Dias y estadisticas: </strong> <span class = "pro-price">D&iacute;as ' . $dias  .'';  
                    echo ' Se esperan un minimo de '. number_format($totalclick = $dias * 100) . ' vistas';
                    echo '</span></div>

                </div>
                </div>
                </section>

                </div>
                </div>
                </div>
                </div>
                </div>';
                }
            } else {
                echo "<tr>";
                echo "<td>" . $row->nombre . "</td>";
                echo "<td>" . $ft . "</td>";
                echo "<td>" . $row->creado . "</td>";
                echo "<td>" . $row->inicia . "</td>";
                echo "<td>" . $row->termina . "</td>";
                echo "<td><a data-toggle='modal' data-target='#myModal$row->id' href='#'>Detalles</a></td>";
                echo "</tr>";
                $dias = (strtotime($row->inicia) - strtotime($row->termina)) / 86400;
                $dias = abs($dias);
                $dias = floor($dias);
                if ($row->estado != 'true') {
                    $estu = "Inactiva";
                } else {
                    $estu = "Activa";
                }
                echo '<!-- Modal -->
<div class="modal fade" id="myModal' . $row->id . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Detalles</h4>
            </div>
            <div style="height: 400px;" class="modal-body">';
                    echo'
                <section class = "panel">
                <div class = "panel-body">
                <div class = "col-md-6">
                <div class = "pro-img-details">';
                    if (!empty($img_camp->img)) {
                        echo '<img class = "img-thumbnail detall_img" src = "' . base_url() . $img_camp->img . '"/>';
                    }
                    echo '</div>
                </div>
                <div class = "col-md-6">
                <h4 class = "pro-d-title">
                <a href = "#" class = "">';
                    echo '<p>' . @$img_camp->nombre_camp . '</p>';
                    echo '</a>
                </h4>
                <p>
                ' . @$img_camp->descripcion . '
                </p>
                <div class = "m-bot15"> <strong>Dias y estadisticas: </strong> <span class = "pro-price">D&iacute;as ' . $dias  .'';  
                    echo ' Se esperan un minimo de '. number_format($totalclick = $dias * 100) . ' vistas';
                    echo '</span></div>

                </div>
                </div>
                </section>

                </div>
                </div>
                </div>
                </div>
                </div>';
            }
        }
    }
    ?>
</tbody>
</table>