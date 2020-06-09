<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Date-time</title>
    </head>
    <body>
        <h2>PHP Date-time</h2>

        <?php
//tao bien chua ngay hien tai
        $date = gmdate("M d y");
        echo 'to day is ' . gmdate("M d y") . '<br>';
        echo "Hom nay la ngay $date <br>";
        ?>

    </body>
</html>