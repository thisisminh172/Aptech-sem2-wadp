<!DOCTYPE html>
<!--
demo ham header(), chuyen huongtrang web
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="../lib/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../lib/js/jquey.js" type="text/javascript"></script>
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <div class = "container">
            <h2>PHP header() demo</h2>
            <hr>
            <?php
                $date = gmdate("d M y");
                $time = gmdate("H");
                //chuyen chuoi thanh so
                $intTime = intval($time);
                echo "<p>Today is $date $time";
                echo "<br>";
                echo $intTime;
                if ($intTime > 7) {
                    echo "<p>It's sleeping time</p>";
                } else {
                    header("location: https://vnexpress.net/");
                }

            ?>
        </div>

    </body>
</html>
