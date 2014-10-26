<?php
if (isset($_GET['listo'])) {
    echo "<p class='alert alert-success'>Campa&ntilde;a creada con exito!</p>";
}
if (isset($_POST['exportado'])) {
    $export = $this->db->where('id_sold', $_POST['exportado']);
    $export = $this->db->get('solicitudes');

    foreach ($export->result() as $rx) :
        $vn = $rx->nombre;
        $vc = $rx->categoria;
        $vh = $rx->horario;
        $h = $rx->hora;
        $m = $rx->minuto;
        $fhI = $rx->inicia;
        $fhF = $rx->finaliza;
        $desp = $rx->descripcion.$rx->costo.$rx->restrincion;
    endforeach;
    
    $rtdemo = explode("-", $fhI);
    $rtdemo2 = explode("-", $fhF);
}
$nom = array(
    'name' => 'nombre',
    'type' => 'text',
    'required' => 'Campo esta vacio antes llenelo',
    'id' => 'camp',
    'autocomplete' => 'off',
    'class' => 'form-control',
    'placeholder' => 'Texto por favor',
    'value' => @$vn
);
$pres = array(
    'name' => 'presupuesto1',
    'type' => 'text',
    'class' => 'form-control datepicker',
    'data-date' => '02-12-2012',
    'data-date-format' => 'dd-mm-yyyy',
    'style' => 'width: 93%',
    'placeholder' => 'Inicia'
);
$pres2 = array(
    'name' => 'presupuesto2',
    'type' => 'text',
    'class' => 'form-control datepicker',
    'required' => 'Campo esta vacio antes llenelo',
    'data-date' => '02-12-2012',
    'data-date-format' => 'dd-mm-yyyy',
    'style' => 'width: 93%',
    'placeholder' => 'Finaliza'
);
$pres3 = array(
    'name' => 'presupuesto1',
    'type' => 'date',
    'class' => 'form-control',
    'required' => 'Campo esta vacio antes llenelo',
    'style' => 'width: 93%',
    'placeholder' => 'Finaliza'
);
$pres4 = array(
    'name' => 'presupuesto2',
    'type' => 'date',
    'class' => 'form-control',
    'required' => 'Campo esta vacio antes llenelo',
    'style' => 'width: 93%',
    'placeholder' => 'Finaliza'
);
/* $zonomerca = array(
  'name' => 'zona',
  'id' => 'tags',
  'type' => 'text',
  'required' => 'Campo esta vacio antes llenelo',
  'class' => 'form-control',
  'style' => 'width: 60%',
  'placeholder' => 'Texto por favor'
  ); */
$tipo = array(
    'none' => 'type',
    '1' => 'Oferta',
    'required' => 'Campo esta vacio antes llenelo',
    '2' => 'Fijo'
);
/* $categ = array(
  'none' => 'categoria',
  '1' => 'Solo texto',
  'required' => 'Campo esta vacio antes llenelo',
  '2' => 'Multimedia'
  ); */

$categ = array(
    'name' => 'categoria',
    'class' => 'form-control',
    'value' => @$vc
);

$options = array(
    '1' => 'Todas las zonas'
);

$css = 'class="btn btn-default"';

echo form_open('in/addncm');
echo form_label('Nombre de Campaña');
echo '<div class="input-group m-bot15">
                                              <span class="input-group-btn">
                                                <button class="btn btn-white" type="button">Go!</button>
                                              </span>
                                          ' . form_input($nom) . "</div>";
echo "<td style='width: 50%'><div id='resultado'></div></td></tr></table>";
echo '<div class="input-append date" id="dp3" data-date="02-12-2012" data-date-format="dd-mm-yyyy">';
echo form_label('Inicio y finalizacion de campa&ntilde;a');
?>
<style>
    .datepickerwesead{
        display: inline;
        padding: 6px 12px;
        font-size: 14px;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
        -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
</style>
<table>
    <!-- Fecha -->
    <tr>
        <td>
            <hr/>
            <label>Fecha inicia en:</label>
            <select class="datepickerwesead" name="parte1_1fechaI">
                <?php
                $datehoy = date('j');
                $datemes = date('n');
                $dateyear = date('Y');

                if (isset($_POST['exportado'])) {
                    for ($i = 1; $i <= 31; $i++) {
                        if($i == $rtdemo[0]){
                            echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                        }
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                } else {
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
                ?> 
            </select>
            <select class=" datepickerwesead" name="parte1_2fechaI">
                <?php
                if (isset($_POST['exportado'])) {
                    for ($i = 1; $i <= 12; $i++) {
                        if($i == $rtdemo[1]){
                            echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                        }
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                } else {
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</optio n>";
                    }
                }
                ?>
            </select>
            <select class="datepickerwesead" name="parte1_3fechaI">
                <?php
                if (isset($_POST['exportado'])) {
                    for ($i = 2014; $i <= 2100; $i++) {
                        if($i == $rtdemo[3]){
                            echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                        }
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                } else {
                    for ($i = $dateyear; $i <= $dateyear + 100; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
                ?>
            </select>
        </td>
        <td style="width: 5%">&nbsp;</td>
        <td>
            <hr/>
            <label>Fecha finaliza en:</label>
            <select class="datepickerwesead" name="parte2_1fechaf" >
                <?php
                $datehoy2 = date('j');
                $datemes2 = date('n');
                $dateyear2 = date('Y');
                if (isset($_POST['exportado'])) {
                    for ($i = 1; $i <= 31; $i++) {
                        if($i == $rtdemo2[0]){
                            echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                        }
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                } else {
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
                ?>
            </select>
            <select class="datepickerwesead" name="parte2_2fechaf">
                <?php
                if (isset($_POST['exportado'])) {
                    for ($i = 1; $i <= 12; $i++) {
                        if($i == $rtdemo2[1]){
                            echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                        }
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                } else {
                    for ($i = 1; $i <= 12; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
                ?>
            </select>
            <select class="datepickerwesead" name="parte2_3fechaf">
                <?php
                if (isset($_POST['exportado'])) {
                    for ($i = $dateyear2; $i <= 2100; $i++) {
                        if($i == $rtdemo2[2]){
                            echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                        }
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                } else {
                    for ($i = $dateyear2; $i <= $dateyear2 + 100; $i++) {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    <hr/>
</tr>
<!- - Hora --> 
<tr>
    <td>
        <hr/>
        <label>Hora inicia en:</label>
        <select class="datepickerwesead" name="parte1_1horaI">
            <?php
            if (isset($_POST['exportado'])) {
                for ($i = 1; $i <= 12; $i++) {
                    if (date('h') == $i) {
                        echo "<option selected='selected' value='" . $h . "'>" . $h . "</option>";
                    } else {

                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            } else {
                for ($i = 1; $i <= 12; $i++) {
                    if (date('h') == $i) {
                        echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                    } else {

                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            }
            ?>
        </select>
        <select class="datepickerwesead" name="parte1_2horaI">
            <?php
            if (isset($_POST['exportado'])) {
                for ($i = 1; $i <= 59; $i++) {
                    if ($m == $i) {
                        echo "<option selected='selected' value='" . $m . "'>" . $m . "</option>";
                    } else {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            } else {
                for ($i = 1; $i <= 59; $i++) {
                    if (date('i') == $i) {
                        echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                    } else {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            }
            ?>
        </select>
        <select class="datepickerwesead" name="parte1_3horaI">
            <?php
            if (isset($_POST['exportado'])) {
                if ($vh == "PM") {
                    echo '<option selected="selected" value="PM">PM</option>';
                } else {
                    echo '<option value="PM">PM</option>';
                }

                if ($vh == "AM") {
                    echo '<option selected="selected" value="AM">AM</option>';
                } else {
                    echo '<option value="AM">AM</option>';
                }
            } else {
                if (date('A') == "PM") {
                    echo '<option selected="selected" value="PM">PM</option>';
                } else {
                    echo '<option value="PM">PM</option>';
                }

                if (date('A') == "AM") {
                    echo '<option selected="selected" value="AM">AM</option>';
                } else {
                    echo '<option value="AM">AM</option>';
                }
            }
            ?> 
        </select>
    </td>
    <td style="width: 5%">&nbsp;</td>
    <td>
        <hr/>
        <label>Hora finaliza en:</label>
        <select class="datepickerwesead" name="parte2_1horaf">
            <?php
            if (isset($_POST ['exportado'])) {
                for ($i = 1; $i <= 12; $i++) {
                    if ($h == $i) {
                        echo "<option selected='selected' value='" . $h . "'>" . $h . "</option>";
                    } else {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            } else {
                for ($i = 1; $i <= 12; $i++) {
                    if (date('h') == $i) {
                        echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                    } else {

                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            }
            ?> 
        </select>
        <select class="datepickerwesead" name="parte2_2horaf">
            <?php
            if (isset($_POST['exportado'])) {
                for ($i = 1; $i <= 59; $i++) {
                    if ($m == $i) {
                        echo "<option selected='selected' value='" . $m . "'>" . $m . "</option>";
                    } else {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            } else {
                for ($i = 1; $i <= 59; $i ++) {
                    if (date('i') == $i) {
                        echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
                    } else {
                        echo "<option value='" . $i . "'>" . $i . "</option>";
                    }
                }
            }
            ?>
        </select>
        <select class="datepickerwesead" name="parte2_3horaf">
            <?php
            if (isset($_POST['exportado'])) {
                if ($vh == "PM") {
                    echo '<option selected="selected" value="PM">PM</option>';
                } else {
                    echo '<option value="PM">PM</option>';
                }

                if ($vh == "AM") {
                    echo '<option selected="selected" value="AM">AM</option>';
                } else {
                    echo '<option value="AM">AM</option>';
                }
            } else {
                if (date('A') == "PM") {
                    echo '<option selected="selected" value="PM">PM</option>';
                } else {
                    echo '<option value="PM">PM</option>';
                }

                if (date('A') == "AM") {
                    echo '<option selected="selected" value="AM">AM</option>';
                } else {
                    echo '<option value="AM">AM</option>';
                }
            }
            ?>
        </select>
    </td>
</tr>
</table>
<hr/>
<?php
echo form_label('Zona para mercado (<span class="text-success">Solo digite una provincia de nuestro pais o zona ejemplo de zona: Cibao,Sur,Norte,Este etc.</span>)');
#echo form_input($zonomerca);
echo "<hr/>";
echo "<div class='col-md-3'>" . form_dropdown('zona', $options, 'large', $css);
/* echo "<select class='form-control' name='zona'>";
  echo "<option>Seleccione una opcion...</option>";
  echo "<option value='Nivel nacional'>A nivel nacional</option>";
  echo "<option value='Nivel internacional'>A nivel internacional</option>";
  echo "<option value='Santo Domingo (de Guzmán)'>Santo Domingo (de Guzmán)</option>";
  echo "<option value='Azua (de Compostela)'>Azua (de Compostela)</option>";
  echo "<option value='Neiba'>Neiba</option>";
  echo "<option value='(Santa Cruz de) Barahona'>(Santa Cruz de) Barahona</option>";
  echo "<option value='San Francisco de Macorís'>San Francisco de Macorís</option>";
  echo "<option value='(Santa Cruz de) El Seibo'>(Santa Cruz de) El Seibo</option>";
  echo "<option value='Comendador'>Elias pi&ntilde;a Comendador</option>";
  echo "<option value='Moca'>Moca</option>";
  echo "<option value='Hato Mayor (del Rey)'>Hato Mayor (del Rey)</option>";
  echo "<option value='Salcedo'>Salcedo</option>";
  echo "<option value='Jimaní'>Jimaní</option>";
  echo "<option value='(Salvaleón de) Higüey'>(Salvaleón de) Higüey</option>";
  echo "<option value='La Romana'>La Romana</option>";
  echo "<option value='(La Concepción de) La Vega'>(La Concepción de) La Vega</option>";
  echo "<option value='Nagua'>Nagua</option>";
  echo "<option value='Bonao'>Bonao</option>";
  echo "<option value='(San Fernando de) Monte Cristi'>(San Fernando de) Monte Cristi</option>";
  echo "<option value='Monte Plata'>Monte Plata</option>";
  echo "<option value='Pedernales'>Pedernales</option>";
  echo "<option value='Baní'>Baní</option>";
  echo "<option value='(San Felipe de) Puerto Plata'>(San Felipe de) Puerto Plata</option>";
  echo "<option value='(Santa Bárbara de) Samaná'>(Santa Bárbara de) Samaná</option>";
  echo "<option value='San Cristóbal'>San Cristóbal</option>";
  echo "<option value='San José de Ocoa'>San José de Ocoa</option>";
  echo "<option value='San Juan (de la Maguana)'>San Juan (de la Maguana)</option>";
  echo "<option value='San Pedro de Macorís'>San Pedro de Macorís</option>";
  echo "<option value='Cotuí'>Cotuí</option>";
  echo "<option value='Santiago (de los Caballeros)'>Santiago (de los Caballeros)</option>";
  echo "<option value='(San Ignacio de) Sabaneta'>(San Ignacio de) Sabaneta</option>";
  echo "<option value='Santo Domingo Este'>Santo Domingo Este</option>";
  echo "<option value='Mao'>Mao</option>";
  echo "</select>"; */
echo "<br/><br/>";
echo form_label('Tipo de Campaña ');
echo "<hr/>";
echo '<div class="radios">
                                              <label class="label_radio" for="radio-01">
                                                  <input name="tipo" id="radio-01" value="1" type="radio" checked=""> Oferta
                                              </label>
                                              <label class="label_radio" for="radio-02">
                                                  <input name="tipo" id="radio-02" value="2" type="radio"> Fijo
                                              </label>
                                          </div>';
echo form_label('Categoria de Campaña ');
echo "<hr/>";
/* echo '<select name="categoria" class="form-control m-bot15">
  <option>Selecione una opci&oacute;n</option>
  <option value="2">Multimedia</option>
  </select></div>'; */
echo form_input($categ) . "</div>";
if(isset($_POST['exportado'])){
echo form_hidden('descrip',$desp);
}
echo "<div class='col-md-9'><button style='padding: 20px 20px; margin-top: 250px;' name='crealo' class='btn btn-success navbar-right'>Listo <i class='glyphicon glyphicon-ok'></i></button><p class='alert alert-success'>Listo para proceder a crear datos.</p></div>";
echo form_close();
?>