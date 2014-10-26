<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class App extends Private_Controller {
    
    
    public function index() {

        if (!@$this->user){
            redirect('app/login');
        }else{
            $this->load->model('admin');
            $data['campp'] = $this->admin->camp_app();
            $this->load->view('app/index',$data);
        }
       
    }
    
    
    public function login(){
        $data = array();

        // Añadimos las reglas necesarias.
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Generamos el mensaje de error personalizado para la accion 'required'
        $this->form_validation->set_message('required', '<p class="alert alert-danger">El campo %s es requerido.</p>');

        // Si no esta vacio $_POST
        if (!empty($_POST)) {
            if(empty($_POST['password']) and empty($_POST['username'])){
                    redirect('app/login?p_fallido');
                }
                
                    #if ($use->actividad != $_SERVER['REMOTE_ADDR']) {
                    // Obtenemos la informacion del usuario desde el modelo users.
                    $logged_user = $this->users->get($_POST['username'], $_POST['password']);

                    // Si existe el usuario creamos la sesion y redirigimos al index.
                    if ($logged_user) {
                        $this->session->set_userdata('logged_user', $logged_user);
                        
                            redirect('app/index');
                    }else{
                        redirect('app/login?ini_fail');
                    }
        }
        
        if ($this->user)
            redirect('app/index');

         $this->load->view('app/login', $data);
    }
    
    
    public function registro_form(){
        $this->load->view('app/registro');
    }

    

    public function logout() {
        $this->session->unset_userdata('logged_user');
        redirect('app/index?logout', 'location');
    }
    
    
    public function perfil(){
        $data['user'] = $this->user;
        $this->load->view('app/perfil', $data);
    }
    
    
    public function cupon(){
        $dato = array();
        $dato['post'] = array( 
            'a' => $_GET['token'],
            'b' => $_GET['camp'],
            'c' => $_GET['id']
        );
        $this->load->view('app/cupon_add', $dato);
    }
    
    public function mcupon(){
        $data['mcupon'] = $this->admin->mcupon();
        $this->load->view('app/mcupon', $data);
    }
    
}

