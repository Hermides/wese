<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clientes extends Private_Controller {
    /* manejo de usuario cliente en wese */

    public function index() {

        if (!@$this->user)
            redirect('site');

        $this->load->view('clientes/index');
    }

    public function login() {

        if (!isset($this->user->Email)) {
            $this->load->view('clientes/login');
        } else {
            redirect('clientes/index');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_user');
        if (isset($_GET['token_fail'])) {
            redirect('site?fail_token', 'location');
        } else {
            redirect('clientes/index', 'location');
        }
    }

    public function registro() {

        $this->load->model('admin');
        $this->admin->reg_client();
    }

    /* funciones de wese ante el cliente */

    public function solicitud() {
        $this->load->view('clientes/solicitud');
    }
    
    
    public function solicitudes(){
            $this->load->view('clientes/solicitudes');
    }

    public function env() {
        if (!empty($_POST)) {
            $this->load->model('admin');
            $this->admin->new_solicitud();
        } else {
            redirect('clientes');
        }
    }

}
