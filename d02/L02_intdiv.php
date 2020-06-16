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
        <h2>PHP.7 intdiv</h2>
        <?php
        // put your code here
        $a = 10;
        $b = 3;
        echo "a = $a, b = $b <br>";
        echo "(int)$a / $b= ".(int)($a/$b).'<br>';
        echo "$a intdiv $b = " . intdiv($a,$b)."<br>";
        ?>
    </body>
</html>
