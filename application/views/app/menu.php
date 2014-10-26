<div class="mainMenuOuterWrapper"> <a class="mainLogo" href="<?php echo base_url('app/'); ?>"><h2>WESE</h2></a> <a href="" class="mainMenuButton"></a>
    <ul class="mainMenuWrapper">
      <li class="currentPage mainMenuItemIcon mainMenuItemIcon2Light"><span class="mainMenuItemOverlay"></span><a href="<?php echo base_url('app/perfil'); ?>"><span> <?php
        if(isset($this->user->nick)){
            echo "Welcome! ".$this->user->nick;
        }else{
         echo "No existe una session";   
        }
        ?></span></a></li>
      <li class="mainMenuItemIcon mainMenuItemIcon5Light"><span class="mainMenuItemOverlay"></span><a href="<?php echo base_url('app/mcupon'); ?>"><span>Mis cupones</span></a></li>
      <li class="mainMenuItemIcon mainMenuItemIcon5Light"><span class="mainMenuItemOverlay"></span><a href="<?php echo base_url('app/'); ?>"><span>Portada</span></a></li>
      
      <li class="mainMenuItemIcon mainMenuItemIcon4Light"><span class="mainMenuItemOverlay"></span><?php echo "<a href='".  base_url('app/logout')."'><span>Cerrar sesion</span></a>"; ?></li>
    </ul>
    <div class="clear"></div>
  </div>
