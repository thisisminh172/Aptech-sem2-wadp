<?php
 include_once './data.inc';
?>
<!DOCTYPE html>
<!-- demo class object php -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class PHP</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>Class PHP</h2>
        <hr>
        <?php
            $p = new Product();
            $p->display();
            $p->setters("P100","Cookie pancake",50000);
            $p->display();
        ?>
    </div>
</body>

</html>