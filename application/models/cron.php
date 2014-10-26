<?php

class Cron  extends CI_Model{
    
    var $table = 'camp';/*tabla sql*/
    var $param = 'true';/*parametro a buscar*/
    
    function active(){
        
        /*consulta2*/#$sql = $this->db->like('estado', $this->param, 'both');
        /*tabla*/$sql = $this->db->get($this->table);
        if ($sql->num_rows() != "") {
            if ($sql->num_rows() > 0) {

                foreach ($sql->result() as $fila):
                    $data[] = $fila;
                endforeach;
            }
            return $data;
        }
        
    }
    
    
    
}

