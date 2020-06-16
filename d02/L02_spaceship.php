<?php
    function printArray($a)
    {
        echo "<pre>";
        print_r($a);
        echo "</pre>";
    }

?>
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
        <div class="container">
            <h2>PHP .7 spaceship operator</h2>
            <hr>
            <?php
                // put your code here
                $a = 10;
                $b = 3;
                $c = 10;
                echo "a = $a, b = $b, c = $c<br>";
                echo "$a <=> $b = " . ($a <=> $b) . "<br>";
                echo "$a <=> $c = " . ($a <=> $c) . "<br>";
                echo "$b <=> $c = " . ($b <=> $c) . "<br>";

                $s1 = "Lam Quach";
                $s2 = "Duong Dao";
                $s3 = "Lam Quach Gia";
                echo "<br>";
                echo "s1 = [$s1], s2 = [$s2] <br>";

                echo "s1 <=> s2 = " . ($s1 <=> $s2) . "<br>";
                echo "s1 <=> s3 = " . ($s1 <=> $s3) . "<br>";

                $a1 = [1, 2, 3, 4, 5, 6];
                $a2 = [2, 3, 4, 5, 6, 7];
                $a3 = [5, 6, 6, 75, 3, 2];

                echo "a1 = ";
                printArray($a1);
                echo "a2 = ";
                printArray($a2);
                echo "a3 = ";
                printArray($a3);
            ?>
        </div>

    </body>
</html>
