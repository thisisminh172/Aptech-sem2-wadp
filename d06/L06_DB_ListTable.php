<!DOCTYPE html>
<!-- liet ke danh sach cac bang trong database 1910db -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show table </title>
    <link rel="stylesheet" href="..\lib\css\bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h2>List of Database</h2>
        <hr>
        <?php
            include_once '..\lib\lib.inc';
            $cn = getConnect();
            $query = "show tables";
            $r = mysqli_query($cn,$query);

            $dbs = mysqli_fetch_all($r);

            foreach($dbs as $key => $db){
                echo "{$db[0]} <br>";
            }

            //debug_zval_dump($dbs);
            mysqli_close($cn);
        ?>
    </div>
</body>

</html>