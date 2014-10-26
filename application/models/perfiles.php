<?php

class perfiles extends CI_Model {

    function verperfil() {

        $sql = $this->db->get('users');

        if ($sql->num_rows() > 0) {

            foreach ($sql->result() as $fila):
                $data[] = $fila;
            endforeach;
        }
        return $data;
    }

}
