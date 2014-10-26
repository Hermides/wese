<?php

/*
 * formulario de peticion de campanas
 */


$nombre_req = array(
    'name' => 'nombre',
    'type' => 'text',
    'class' => 'form-control',
    'id' => 'camp',
    'required' => '',
    'style' => 'width: 50%'
);

$categoria = array(
    'none' => 'none'
);


$descripcion = array(
    'name' => 'descripcion',
    'class' => 'form-control',
    'required' => '',
    'style' => 'width: 40%'
);

$costo = array(
    'name' => 'costo',
    'type' => 'text',
    'id' => '',
    'required' => '',
    'class' => 'form-control',
    'placeholder' => 'Precio real',
    'style' => 'width: 250px;'
);

if (date('n') == '1') {
    $diac = date('n');
    $max = "31";
} else if (date('n') == '2') {
    $diac = date('n');
    $max = "28";
} else if (date('n') == '3') {
    $diac = date('n');
    $max = "31";
} else if (date('n') == '4') {
    $diac = date('n');
    $max = "30";
} else if (date('n') == '5') {
    $diac = date('n');
    $max = "31";
} else if (date('n') == '6') {
    $diac = date('n');
    $max = "30";
} else if (date('n') == '7') {
    $diac = date('n');
    $max = "31";
} else if (date('n') == '8') {
    $diac = date('n');
    $max = "31";
} else if (date('n') == '9') {
    $diac = date('n');
    $max = "30";
} else if (date('n') == '10') {
    $diac = date('n');
    $max = "31";
} else if (date('n') == '11') {
    $diac = date('n');
    $max = "30";
} else if (date('n') == '12') {
    $diac = date('n');
    $max = "31";
}


$mes = array(
    'name' => 'mes',
    'type' => 'number',
    'required' => '',
    'class' => 'form-control',
    'style' => 'width: 50%;',
    'min' => '1',
    'max' => '12',
    'value' => date('m')
);

$year = array(
    'name' => 'year',
    'type' => 'number',
    'required' => '',
    'class' => 'form-control',
    'style' => 'width: 50%',
    'min' => date('Y'),
    'max' => date('Y') + 5,
    'value' => date('Y')
);

/* $duracion = array(
  'name' => 'duracion',
  'type' => 'text',
  'required' => '',
  'class' => 'spinner-input form_control',
  'style' => 'width: 25%'
  ); */

$hora = array(
    'name' => 'hora',
    'type' => 'number',
    'class' => 'form-control',
    'required' => '',
    'min' => '1',
    'max' => '12',
    'list' => 'hora'
);


echo "<datalist id='hora'><option value='1'><option value='2'><option value='3'><option value='4'><option value='5'><option value='6'><option value='7'><option value='8'><option value='9'><option value='10'><option value='11'><option value='12'></datalist>";

$hora2 = array(
    'name' => 'minuto',
    'type' => 'number',
    'class' => 'form-control',
    'required' => '',
    'min' => '1',
    'max' => '59',
    'list' => 'minuto'
);

echo "<datalist id='minuto'>";
for ($i = 1; $i <= 59; $i++) {
    echo "<option value='$i'>";
}
echo"</datalist>";

$hora3 = array(
    'PM' => 'PM',
    'required' => '',
    'AM' => 'AM'
);


$restri = array(
    'name' => 'restrincion',
    'class' => 'form-control',
    'required' => ''
);

/* creamos formulario */

echo form_open('clientes/env');
echo form_label('Nombre de Camapa&ntilde;a');
echo form_input($nombre_req);
echo "<hr><div>" . form_label('Categoria') . form_dropdown('categoria', $categoria) . "</div>";
echo '<hr>';
echo form_label('Descripcion');
echo form_textarea($descripcion);
echo '<hr>';
echo form_label('Costo ( articulo, servicio, oferta )');
echo form_input($costo);
echo '<hr>';
echo form_label('Fecha de inicio');
echo "<ul class='nav nav-pills'><li><select name='dia' >";
for ($i = 1; $i <= $max; $i++) {
    if ($i == date('j')) {
        echo "<option selected='selected' value='" . $i . "'>" . $i . "</option>";
    } else {
        echo "<option value='" . $i . "'>" . $i . "</option>";
    }
}
echo"</select></li><li><select name='mes' >";
for ($m = 1; $m <= 12; $m++) {
    if ($m == date('n')) {
        echo "<option selected='selected' value='" . $m . "'>" . $m . "</option>";
    } else {
        echo "<option value='" . $m . "'>" . $m . "</option>";
    }
}
echo"</select></li><li><select name='year' >";
for ($a = date('Y'); $a <= date('Y') + 5; $a++) {
    echo "<option value='" . $a . "'>" . $a . "</option>";
}
echo"</select></li></ul>";
echo '<hr>';
echo form_label('Fecha finalizaci$oacute;n deseada');
echo "<ul class='nav nav-pills'><li><select name='die' >";
for ($x = 1; $x <= $max; $x++) {
    if ($x == date('j')) {
        echo "<option selected='selected' value='" . $x . "'>" . $x . "</option>";
    } else {
        echo "<option value='" . $x . "'>" . $x . "</option>";
    }
}
echo"</select></li><li><select name='mis'>";
for ($y = 1; $y <= 12; $y++) {
    if ($y == date('n')) {
        echo "<option selected='selected' value='" . $y . "'>" . $y . "</option>";
    } else {
        echo "<option value='" . $y . "'>" . $y . "</option>";
    }
}
echo"</select></li><li><select name='yeara'>";
for ($u = date('Y'); $u <= date('Y') + 5; $u++) {
    echo "<option value='" . $u . "'>" . $u . "</option>";
}
echo"</select></li></ul>";
echo '<hr>';
echo form_label('Hora de preferencia para el inicio (<span class="text-info">La finalizacion se ajustara automaticamente.)</span>');
echo "<ul class='nav nav-pills'><li><select name='hora'>";
for ($h = 1; $h <= 12; $h++) {
    echo "<option value='$h'>$h</option>";
}
echo"</select></li><li><select name='minuto'>";
for ($t = 1; $t <= 60; $t++) {
    if ($t == date('i')) {
        "<option selected='selected' value='$t'>$t</option>";
    } else {
        echo "<option value='$t'>$t</option>";
    }
}
echo"</select></li><li>" . form_dropdown('horario', $hora3) . "</li></ul>";
echo "<hr>";
echo form_label('Restricciones aplican') . "<br>";
echo form_textarea($restri);
echo "<p class='alert alert-info'><span class='text-info'>Marque si no aplican restrinciones.</span> " . form_checkbox('restricion-no', 'no', FALSE)."</p>";
echo "<p class='alert alert-info'><span class='text-info'>Desmarque si no enviara imagenes.</span> " . form_checkbox('img-no', 'si', TRUE)."</p>";
echo "<hr><button type='submit' class='btn btn-default'>Procesar</button><hr>";
echo form_close();

echo date('j - M - Y');
