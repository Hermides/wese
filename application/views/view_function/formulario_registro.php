<?php

                        $fistnom = array(
                            'name' => 'nombre',
                            'type' => 'text',
                            'class' => 'form-control',
                            'style' => 'width: 60%',
                            'placeholder' => 'Primer nombre'
                        );
                        $fistapell = array(
                            'name' => 'apellido',
                            'type' => 'text',
                            'style' => 'width: 60%',
                            'class' => 'form-control',
                            'placeholder' => 'primer apellido'
                        );
                        $nick = array(
                            'name' => 'nick',
                            'type' => 'text',
                            'style' => 'width: 60%',
                            'class' => 'form-control',
                            'placeholder' => 'nombre de usuario'
                        );
                        $correo = array(
                            'name' => 'correo',
                            'type' => 'email',
                            'style' => 'width: 60%',
                            'class' => 'form-control',
                            'placeholder' => 'Correo E'
                        );

                        $contra = array(
                            'name' => 'password',
                            'type' => 'password',
                            'style' => 'width: 60%',
                            'class' => 'form-control',
                            'id' => 'clave',
                            'placeholder' => 'contrase&ntilde;a'
                        );

                        $daf = array(
                            'name' => 'fecha_nac',
                            'type' => 'date',
                            'style' => 'width: 50%',
                            'class' => 'form-control',
                            'placeholder' => 'fecha de nacimiento'
                        );

                        $movil = array(
                            'name' => 'movil',
                            'type' => 'text',
                            'maxlength' => '10',
                            'style' => 'width: 50%',
                            'class' => 'form-control',
                            'placeholder' => 'Movil por favor: 000-000-0000'
                        );
                        
                        

                        echo form_open('in/registro');
                        echo form_label('Primer nombre');
                        echo form_input($fistnom);/*primer nombre*/
                        echo form_label('Primer apellido');
                        echo form_input($fistapell);/*primer apellido*/
                        echo form_label('nickname');
                        echo form_input($nick);/*apodo*/
                        echo form_label('correo');
                        echo form_input($correo);/*email del usuario*/
                        echo form_label('Contrase&ntilde;a');
                        echo form_input($contra);/*password personal*/
                        echo "<span id='passstrength'></span><br/>";/*comprovando el tamano de su password*/
                        echo form_label('fecha de nacimiento');
                        echo form_input($daf);/*fecha de nacimiento*/
                        echo form_label('Movil');
                        echo form_input($movil);/*movil personal*/
                        echo form_label('Pais');
                        echo "<select name='pais' class='form-control'>";
                        $oto = $this->db->get('pais');
                        foreach ($oto->result() as $row_pais){
                            echo "<option value='".$row_pais->id_pais."' >".$row_pais->nombre."</option>";
                        }
                        echo "</select>";
                        echo "<br/>";
                        echo "<button type='submit' name='ok' class='btn btn-default'>Listo!</button>";
                        echo form_close();