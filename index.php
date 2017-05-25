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
        $probna = isset($_POST['promenliva']) ? $_POST['promenliva'] : "niama promenliva v post";
        echo $probna. '<br/>';
        
        
        $year = 2011;
        
        switch($year){
            case 2000: echo "godina 2000"; break;
            case 2001: echo "godina 2001"; break;
            case 2010: echo "godina 2010"; break;
            case 2011: echo "godina 2011"; break;
            case 2015: echo "godina 2015"; break;
        }
          
        ?>
    </body>
</html>
