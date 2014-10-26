<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    protected $table;
    protected $id;

    /*
      Constructor del modelo, aqui establecemos
      que tabla utilizamos y cual es su llave primaria.
     */

    function __construct() {
        parent::__construct();
        $this->table = 'clientes';
        $this->id = 'id_cliente';
    }

    /*
      Con esta funcion comprobamos que exista el
      usuario en la base de datos, si es asi retornamos
      el contenido del registro, de lo contrario se
      retorna FALSE.
     */

    function get($username = '', $password = '') {
        if (isset($_POST['client'])) {
            return $this->db->get_where(
                            $this->table2, array(
                        'Email' => $username,
                        'passwd' => $password
                            )
                    )->row();
        }
    }

}
