<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP.7 Closure call</title>
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Closure call</h2>
            <hr>
            <?php
            // put your code here
            class Greeting{
                private $word = "Hello";
            }
            class Farewell{
                private $word = "Goodbye";
                private $message = "Attendtion";
            }
            $f = function($p){
                echo "<p>$this->word, $p</p>";
            };
            
            $b1 = new Greeting();
            $b2 = new Farewell();
            
            $f->call($b1, "ngoc thach");
            $f->call($b2, "Thien Y");
            ?>  
        </div>

    </body>
</html>
