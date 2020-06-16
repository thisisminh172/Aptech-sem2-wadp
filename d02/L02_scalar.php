<?php

function printArray($a) {
    echo "<pre>";
    print_r($a);
    echo "</pre>";
}
?>
<!DOCTYPE html>
<!--
demo ham cong 2 so
ham add, co 2 tham so a,b.[khong khai bao kieu cua a va b]
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Scalar type</title>
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="class">
            <h2>php7 function without parameter type</h2>
            <hr>
            <?php
            // put your code here
            $x = 15;
            $y = 6;
            
            add($x,$y);
            
            $x1 = 13.678;
            add($x,$x1);
            
            $x2 = "123";
            add($x,$x2);
            
            function add($a,$b){
                $kq = $a + $b;
                echo "$a + $b = ".$kq."<br>";
            }
            ?>
        </div>

    </body>
</html>
