<!DOCTYPE html>
<!--
Demo tao bo gia tri ngau nhien bat ky
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generator</title>
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="-fluid">
            <h2>PHP 7.x - Generator</h2>
            <hr>
            <?php
            srand();
            // put your code here
            //ham tao bo so ngau nhien gom n-so[10-100]
            
            function SoNN($n){
                for($i = 0 ; $i < $n; $i++){
                    yield rand(10,100);
                }
                return -1;
            }
            
            //goi ham so ngau nhien de tao 5 so bat ky
            echo "<p> *** 6 so ***:";
            $r = SoNN(6);
            foreach($r as $item){
                echo "<br>$item<br>";
            }
            echo "</p>";
            ?>
        </div>

    </body>
</html>
