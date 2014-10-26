<?php

/* datos */

$emp = array(
    'name' => 'empresa',
    'type' => 'text',
    'class' => 'form-control',
    'placeholder' => 'Su empresa es conocida como.'
);

$email = array(
    'name' => 'email',
    'type' => 'email',
    'class' => 'form-control',
    'placeholder' => 'Recomendamos un email de uso empresarial.'
);

$websitie = array(
    'name' => 'web',
    'type' => 'url',
    'class' => 'form-control',
    'placeholder' => 'Url ejemplo: http://ejemplo.com'
);

$tel0 = array(
    'name' => 'area',
    'type' => 'text',
    'class' => 'form-control',
    'placeholder' => 'Area',
    'maxlength' => '3',
);

$tel1 = array(
    'name' => 'codigo',
    'type' => 'text',
    'class' => 'form-control',
    'placeholder' => '000',
    'maxlength' => '3'
);


$tel2 = array(
    'name' => 'idphone',
    'type' => 'text',
    'class' => 'form-control',
    'placeholder' => '0000',
    'maxlength' => '4',
);

$dir = array(
    'name' => 'direccion',
    'class' => 'form-control',
    'placeholder' => 'Su ubicaci&otilde;n'
);

$pwd1 = array(
    'name' => 'password',
    'type' => 'password',
    'class' => 'form-control',
    'placeholder' => 'contrase&ntilde;a'
);

$pwd2 = array(
    'name' => 'password2',
    'type' => 'password',
    'class' => 'form-control',
    'placeholder' => 'contrase&ntilde;a'
);
/* fin */

$options = array(
    '1' => 'Tecnologia',
    '2' => 'Telecomunicaciones'
);



/* abrir formulario */
echo form_open('clientes/registro');
/* contenido */

echo '
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">';
echo form_label('Nombre de la empresa o negocio <span class="text-danger">(Obligatorio)</span>');
echo form_input($emp);
echo form_label('Correo (Email) <span class="text-danger">(Obligatorio)</span>');
echo form_input($email);
echo form_label('Sitio web de la empresa o negocio.');
echo form_input($websitie);
echo form_label('Telefono empresarial. <span class="text-danger">(Obligatorio)</span>');
echo "<br/><div class='row'><div class='col-md-3'>" . form_input($tel0) . "</div>";
echo "<div class='col-md-3'>" . form_input($tel1) . "</div>";
echo "<div class='col-md-4'>" . form_input($tel2) . "</div></div>";
echo form_label('Categoria emprasarial');
echo "<div class='alert alert-info'>".form_dropdown('categoria', $options)."</div>";
echo form_label('Contrase&ntilde;a <span class="text-danger">(Obligatorio)</span>');
echo form_input($pwd1);
echo form_label('Repetir contrase&ntilde;a <span class="text-danger">(Obligatorio)</span>');
echo form_input($pwd2);
echo "<br>";
echo "<button class='btn btn-success'>Listo!</button>";
#echo'<ul class="nav nav-tabs" role="tablist"><li><a href="#profile" role="tab" data-toggle="tab">Segundo paso <i class="glyphicon glyphicon-chevron-right"></i></a></li></ul>  
  #</div>
  #<div class="tab-pane" id="profile">';
echo "<a class='text-info'>Terminos y uso</a><hr></div></div>";
#echo form_label('Direcci&oacute;n <span class="text-danger">(Obligatorio)</span>');
#echo form_textarea($dir);
#echo form_label('Contrase&ntilde;a <span class="text-danger">(Obligatorio)</span>');
#echo form_input($pwd1);
#echo form_label('Repetir contrase&ntilde;a <span class="text-danger">(Obligatorio)</span>');
#echo form_input($pwd2);
#echo "<br>";
#echo "<button class='btn btn-success'>Listo!</button>";
#echo '<ul class="nav nav-tabs" role="tablist"><li><a href="#home" role="tab" data-toggle="tab"><i class="glyphicon glyphicon-chevron-left"></i> Regresar</a></li></ul>';
#echo'</div>
#</div>
#<br>
#<!-- Nav tabs --
#<ul class="nav nav-tabs" role="tablist">
#</ul-->
#';
/* fin contenido */
/* submit button */
/* fin submit */
echo form_close();
/*cerrar formulario*/


