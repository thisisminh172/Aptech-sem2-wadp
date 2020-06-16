<!DOCTYPE html>
<!--
demo cong 2 so
ham add, co 2 tham so a,b.[co khai bao kieu cua a va b]

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="class">
            <h2>php7 function with parameter type</h2>
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
            
            function add(int $a,int $b){
                $kq = $a + $b;
                echo "a = $a, b = $b <br>";
                echo "$a + $b = ".$kq."<br><br>";
            }
            ?>
        </div>
    </body>
</html>
