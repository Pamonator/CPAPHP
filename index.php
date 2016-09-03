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
    <body>        
        <?php
        require_once("require.php");
        $info = new Coordenador();
        $info->setId(1);
        $info->setNome("Lucas");
        print $info->getId();
        print $info->getNome();
        
        ?>
    </body>
</html>
