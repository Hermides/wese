<html>
    <head>
        <title>Email de validacion</title>
    </head>
    <body>
        <?php 
        $rty = $this->db->where('Empresa', $tokens);
        $rty = $this->db->get('clientes');
        
        
        foreach ($rty->result() as $val);
        
            echo "<img src='http://snapsoft.com.do/repos_wese/img/title.png'/>";
            echo "<p style='color: gray;'>".$tokens."</p>";
            echo "<p style='color: green; boder: 1px solid gray;'>Saludos, por favor valide su cuenta http://wese.snapsoft.com.do/cuentas?token=".$val->token."</p>";
            echo "<img src='http://snapsoft.com.do/repos_wese/img/body.png'/>";
        
        ?>
    </body>
</html>

