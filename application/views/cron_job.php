<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    </head>
    <body>
        <div id="content" class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Panel vista de eventos programados <span class="alert alert-info">Evento:  Active</span></div>
            <p>
                <?php
                $cadena = date('j-n-Y');
                $cadena = ereg_replace("[^A-Za-z0-9]", "", $cadena);
                $cadena;
                ?>
            </p>
            <!-- Table -->
            <table class="table">
                <thead>
                <th>Nombre de camp</th>
                <th>Estado</th>
                <th>Inicia</th>
                <th>Finaliza</th>
                <th>Auto-accion</th>
                </thead>
                <tbody>
                    <?php
                    if (!$datos) {
                        echo "<p class='alert alert-info'>No hay  datos que mostrar.</p>";
                    }
                    foreach ($datos as $data_row) {
                        echo "<tr>";
                        echo "<td>" . $data_row->nombre . "</td>";
                        echo "<td>" . $data_row->estado . "</td>";
                        echo "<td>" . $data_row->inicia . "</td>";
                        echo "<td>" . $data_row->termina . "</td>";
                        $cadena2 = $data_row->inicia;
                        $cadena2 = ereg_replace("[^A-Za-z0-9]", "", $cadena2);
                        $cadena2;
                        if ($data_row->estado == 'false') {
                            if ($cadena2 >= $cadena) {
                                if($cadena2 == $cadena){
                                   echo "<td>Activando...</td>";
                                $param = array(
                                    'estado' => 'true'
                                );
                                $this->db->where('id', $data_row->id);
                                $this->db->update('camp', $param); 
                                }else{
                                    echo '<td>Esperando dia...</td>';
                                }
                                
                            } else {
                                echo "<td>Tiempo agotado</td>";
                                $param = array(
                                    'id' => $data_row->id
                                );
                                $this->db->delete('camp', $param);
                            }
                        } else {
                            echo "<td>Activada</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>
            setInterval(function() {
                $("#content").load(location.href + " #content>*", "");
            }, 1000);
        </script>
    </body>
</html>
