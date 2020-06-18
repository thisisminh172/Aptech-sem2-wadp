<!DOCTYPE html>
<!--
    demo cac ham date time PHP
 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Date time PHP</h1>
        <hr>
        <?php
            //lay ngay hien hanh cua he thong theo mui gio viet nam
            date_default_timezone_set("Asia/Saigon");
            $today = getdate();
            echo "<pre>";
            print_r($today);
            echo "</pre>";
            //echo getdate()[0];

            echo "Month: {$today['month']} <br>";
            echo "Year: " . $today['year'] . "<br>";
            echo "Day: " . $today['mday'] . "<br>";
            
            
            echo "Today is : ". date("d-M-Y , h:i:s a");
        ?>

    </div>
</body>
</html>