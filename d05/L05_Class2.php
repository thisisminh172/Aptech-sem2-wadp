<?php
    include_once './data.inc';
    //khai bao mang a chua cac san pham product
    
    $a = array(
        new Product("P1","laptop",1200),
        new Product("P2","DEsktop",1000),
        new Product("P1","iphone",200)

    );
?>
<!DOCTYPE html>
<!-- demo mang chua cac doi tuong -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class PHP</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>Array - Class PHP</h2>
        <hr>
        <table class="table table-border table-hover table-striped">
            <thead>
                <th>STT</th>
                <th>Ma san pham</th>
                <th>Ten san pham</th>
                <th>Don gia</th>
            </thead>
            <tbody>
                <?php
                    foreach($a as $i=>$item){
                        echo "<tr>";
                        echo "<td>". ++$i ."</td>";
                        echo "<td>$item->id</td>";
                        echo "<td>$item->name</td>";
                        echo "<td>$item->price</td>";
                        echo "</tr>";
                    }
            ?>
            </tbody>
        </table>

    </div>
</body>

</html>