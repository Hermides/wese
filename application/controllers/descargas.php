<?php
class Descargas extends CI_Controller{
    
    public function pdf(){
        #$this->load->models('admin');
        $dats['datos'] = $this->admin->solic($_GET['d']);
        $this->load->view('pdf_view',$dats);
    }
    
}

