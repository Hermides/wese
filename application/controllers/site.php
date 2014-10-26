<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Site extends Private_Controller {

    public function index() {
        $this->load->view('site/index');
    }
    
    
    public function under_development(){
        $this->load->view('site/under');
    }
    
    public function maintenance(){
        $this->load->view('site/mantenimiento');
    }

}
