<?php

$this->load->helper('dompdf_config.inc');


 if (isset($datos)) {
        foreach ($datos as $legible):
            $nombre = $legible->nombre;
            $categoria = $legible->categoria;
            $descripcion = $legible->descripcion;
            $costo = $legible->costo;
            $ini = $legible->inicia;
            $fin = $legible->finaliza;
            $hora = $legible->hora . ':' . $legible->minuto . ' ' . $legible->horario;
            $res = $legible->restrincion;
        endforeach;
    }
    
    
$codigo = "
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset='UTF-8'>
            <title></title>
        </head>
        <body>
        
            <table>
                <thead>
                    <tr><th>WESE DATA CLIENTE</th></tr>
                    <tr><th>Datos de la campaña.</th></tr>
                </thead>
            </table>
            <ul>
                <li>Nombre de campaña: $nombre</li>
                <li>Categoria: $categoria</li>
                <li>Descripcion: $descripcion</li>
                <li>Costo: $costo</li>
                <li>Fecha de inicio: $ini</li>
                <li>Fecha de finalizacion: $fin</li>
                <li>Hora de inicio: $fin</li>
                <li>Restriciones: $res</li>
            </ul>
        </body>
    </html>";

$nom_pdf = "wese_".date('d-m-Y--H:i:s').".pdf";

    $codi = utf8_decode($codigo);
    $dompdf=new DOMPDF();
    $dompdf->load_html($codi);
    ini_set("memory_limit","512M");
    $dompdf->render();
    $dompdf->stream($nom_pdf);