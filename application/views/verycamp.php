<?php

      $user = $_POST['b'];
       
      if(!empty($user)) {
            comprobar($user);
      }
       
      function comprobar($b) {
          
            $sql = mysql_query("SELECT * FROM `camp` WHERE nombre = '".$b."'");
             
            $contar = mysql_num_rows($sql);
             
            if($contar == 0){
                  echo "<p class='alert alert-success'>Disponible.</p>";
            }else{
                  echo "<p class='alert alert-danger'>No esta disponible al parecer ya lo utilizo en otra campa&ntilde;a.</p>";
            }
      }     
?>
    
