<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class In extends Private_Controller {

    public function index() {
        /*
          Si no esta logueado lo redirigmos al formulario de login.
         */
        if (!@$this->user)
            redirect('site');

        $this->load->view('index');
    }

    public function login() {

        $data = array();

        // Añadimos las reglas necesarias.
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        // Generamos el mensaje de error personalizado para la accion 'required'
        $this->form_validation->set_message('required', '<p class="alert alert-danger">El campo %s es requerido.</p>');

        // Si no esta vacio $_POST
        if (!empty($_POST)) {
            if (isset($_POST['client'])) {
                // Si las reglas se entramos a la condicion.
                    
                if(empty($_POST['password']) and empty($_POST['username'])){
                    redirect('clientes/login?p_fallido');
                }
                
                    #if ($use->actividad != $_SERVER['REMOTE_ADDR']) {
                    // Obtenemos la informacion del usuario desde el modelo users.
                    $logged_user = $this->users->get($_POST['username'], $_POST['password']);

                    // Si existe el usuario creamos la sesion y redirigimos al index.
                    if ($logged_user) {
                        $this->session->set_userdata('logged_user', $logged_user);
                        
                            redirect('clientes/index');
                    }else{
                        redirect('clientes/login?ini_fail');
                    }
                    #}
            } else  if (isset($_POST['admin'])){
                // Si las reglas se entramos a la condicion.
                if ($this->form_validation->run() == TRUE) {
                    $validad_off = $this->db->like('correo', $_POST['username']);
                    $validad_off = $this->db->get('users');
                    foreach ($validad_off->result() as $use) {
                        
                    }
                    #if ($use->actividad != $_SERVER['REMOTE_ADDR']) {
                    // Obtenemos la informacion del usuario desde el modelo users.
                    $logged_user = $this->users->get($_POST['username'], $_POST['password']);

                    // Si existe el usuario creamos la sesion y redirigimos al index.
                    if ($logged_user) {
                        $this->session->set_userdata('logged_user', $logged_user);
                        
                            redirect('in/index');
                    } else {
                        // De lo contrario se activa el error_login.
                        $data['error_login'] = TRUE;
                    }
                    #}
                }
            }
        }

        $this->load->view('login', $data);
    }

    public function registro() {
        $this->load->model('admin');
        $this->admin->registro();
    }

    public function perfil() {
        $this->load->model('perfiles');
        $data['registros'] = $this->perfiles->verperfil();
        $this->load->view('perfil', $data);
    }

    /* Campanas */

    public function newcampaign() {
        $this->load->view('campaign');
    }

    public function addncm() {
        $this->load->model('admin');
        $this->admin->nuevac();
    }

    public function lista() {
        $this->load->model('admin');
        $data['registro'] = $this->admin->lista01();
        if (!empty($data)) {
            $this->load->view('lista01', $data);
        } else {
            $this->load->view('lista01');
        }
    }
    
    public function APDS(){
        $this->load->view('clientes');
    }
    
    public function APDC(){
        $this->load->view('lista_client');
    }

    /* fin campanas */

    public function logout() {
        $this->session->unset_userdata('logged_user');
        redirect('in/index?logout', 'location');
    }

    /* app */

    public function movil() {

        $this->load->view('Mobile_Detect');
        $detect = new Mobile_Detect(); //redireccionar a versión móvil si nos visitan desde un móvil o tablet 
        if
        ($detect->isMobile() || $detect->isTablet()) {

            $this->load->view('movil');
        } else {

            $this->load->view('movil');
        }
    }

    public function loginapp() {

        if (isset($_POST['username'])) {
            $user = $_POST['username'];
            $rt = $this->db->where('nick', $user);
            $rt = $this->db->get('users_apps');

            foreach ($rt->result() as $rty) {

                if (!empty($rty->nick)) {
                    session_start();
                    $_SESSION['userapp'] = $rty->nick;
                    redirect('in/movil');
                }
            }
        } else {
            $this->load->view('loginapp');
        }
    }

    public function verifycamp() {
        $this->load->view('verycamp');
    }

    public function email_demo() {
        $config['charset'] = 'utf-8';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from('soporte@wese.snapsoft.com.do', 'WESE AD SOPORTE DE CUENTAS');
        $this->email->to("sorportmiguel@gmail.com");
        #$this->email->cc('another@another-example.com');
        #$this->email->bcc('them@their-example.com');
        $data['tokens'] = 'sorportmiguel@gmail.com';
        $mensaje = $this->load->view('template/validador_email', $data, TRUE);
        $this->email->subject('Bienvenido! a wesead validador');
        $this->email->message($mensaje);

        $this->email->send();
    }

    public function tempte() {
        $this->load->view('template/validador_email');
    }

    /* fin app */
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */