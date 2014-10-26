<?php

class Cuentas extends CI_Controller {

    var $token = '';
    var $ryper = '';

    public function index() {

        if (isset($_GET['token'])) {
            if(!empty($_GET['token'])){
            /* Apps */
            echo "<code style='background: #2c3e50; color: #ecf0f1; padding: 20px 20px; border-radius: 5%;'>token es:" . $_GET['token']."</code>";
            /* fin */
            $token = array(
                'token' => 'Activa'
            );
            /* Clientes token -> get */
            $consul = $this->db->where('token', $_GET['token']);
            $consul = $this->db->get('clientes');
            /* Clientes id -> token */

            foreach ($consul->result() as $ryper);
                ;
            @$this->ryper = $ryper->token;
            
            if (!empty($this->ryper)) {
                $this->db->where('token', $this->ryper);
                $this->db->update("clientes", $token);
                
                
                
                $data['clientev'] = "<p>".$ryper->Empresa."</p><p>".$ryper->Email."</p>";


                $this->load->view('clientes/validado', $data);
            }else{
                $this->load->view('clientes/validado');
            }
            
            }else{
                echo "error de token no existe datos para validar";
            }
        }
    }

}
