<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        body {
            background: #ecf0f1;
        }

        .cuadro{
            background: #34495e;
            border: #00a6b2 solid 1px;
            max-width: 400px;
            max-height: 650px;
            margin: 0;
            padding: 20px 20px;
        }

        p{
            color: #ecf0f1;
            font-size: 18px;
        }

        h1{
            color: #6dbb4a;
            border: 3px #ecf0f1 solid;
            border-radius: 5px 5px 5px 5px;
            font-size: 60px;
        }
        
        
        h3{
            color: #e74c3c;
            border: 3px #ecf0f1 solid;
            border-radius: 5px 5px 5px 5px;
            font-size: 60px;
        }
        
        .btn{
            padding: 10px 20px;
            background: #f1c40f;
            color: black;
            text-decoration: none;
        }
    </style>
    <body>
    <center>
        <div class="cuadro">
            <?php
            if(!empty($clientev)){
                if($_GET['token'] == 'Activa'){
                 echo '<h3>Ooh! error provocado expliquece por favor, que queria lograr con eso.<h3>';   
                }else{
                echo '<h1>Valido!</h1>';
                echo $clientev;
                }
            }else{
                echo "<h3>Esta cuenta ya fue validada anteriormente.</h3>";
            }
            ?>
            <p>Por favor Entre a su cuenta  ir a <a class="btn" href="http://wese.snapsoft.com.do/clientes/login">Entrada Wese</a></p>
        </div>
    </center>
</body>
</html>
