<?php

class Valid extends CI_Model {
/*validar inicio de session activo para restringir accesso a usuario no deseados*/
    function auth() {
        if (!isset($this->user->Email)) {
            redirect('clientes/login');
        } else if ($this->user->token != 'Activa') {
            redirect('clientes/logout?token_fail');
        }
    }

}

?>
