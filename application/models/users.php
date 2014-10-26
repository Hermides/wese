<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Model {

    protected $table;
    protected $id;

    /*
      Constructor del modelo, aqui establecemos
      que tabla utilizamos y cual es su llave primaria.
     */

    function __construct() {
        parent::__construct();
        $this->table = 'users';
        $this->table2 = 'clientes';
        $this->table3 = 'us_app';
    }

    /*
      Con esta funcion comprobamos que exista el
      usuario en la base de datos, si es asi retornamos
      el contenido del registro, de lo contrario se
      retorna FALSE.
     */

    function get($username = '', $password = '') {
        if (isset($_REQUEST['client'])) {
            return $this->db->get_where(
                            $this->table2, array(
                        'Email' => $username,
                        'passwd' => md5($password)
                            )
                    )->row();
        } else if(isset ($_REQUEST['admin'])){
            return $this->db->get_where(
                            $this->table, array(
                        'correo' => $username,
                        'password' => md5($password)
                            )
                    )->row();
        }else{
            return $this->db->get_where(
                            $this->table3, array(
                        'username' => $username,
                        'password' => $password
                            )
                    )->row();
        }
    }

}
