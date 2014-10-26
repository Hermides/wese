<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>proccess///....</title>
    </head>
    <body>
        <?php
        // put your code here
        
        echo $post['a'];
        
       echo "$get->camp Recivido espere... ".$post['a'];
        if(!empty($post)){
            
            $cue = $this->db->where('md5', $post['a']);
            $cue = $this->db->get('cupon');
            
            foreach ($cue->result() as $valid);
            
            if(!$valid->md5){
              $datos = array(
            'md5' => $post['a'],
            'user_id' => $this->user->id,
            'camp' => $post['b'],
            'camp_id' => $post['c'], 
            'fecha' => date('Y-m-d')
        );
        $this->db->insert('cupon', $datos);
        redirect('app/');  
            }else{
                redirect('app/mcupon');
            }
        }else{
            redirect('app/');
        }
        ?>
    </body>
</html>
