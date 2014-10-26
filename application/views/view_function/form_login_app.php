



<br />

<form action="<?php echo base_url('app/login'); ?>" class="" method="post">
    <h2 class="form-signin-heading">INGRESA AHORA</h2>
                <div class="login-wrap"> 
    <input style="width: 100%" class="form-control" placeholder="user" type="text" name="username" value="<?php echo @$_POST['username']; ?>"/><br />
    <input type="hidden" name="app"/>
    <input style="width: 100%" class="form-control" placeholder="clave de acceso" type="password" name="password" value="<?php echo @$_POST['password']; ?>" /><br />
    <input class="btn btn-lg btn-login btn-block" type="submit" value="Entrar">
    
    <a href="#">Olvide la clave?</a>
</form>
</div>
<p>&nbsp;</p>

