<!DOCTYPE html>
<!--
demo uniform variable
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">
            <h2>PHP7 Uniform Variable</h2>
            <hr>
            <?php
            // put your code here
            $vehicle = "car";
            $car = "Toyota";
            echo "car = $car <br>";
            
            echo "<br>*** by uniform variable ***<br>";
            echo "car = ".$$vehicle."<br>";
            ?>
        </div>

    </body>
</html>
