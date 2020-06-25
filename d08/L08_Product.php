<?php
 include_once 'data.inc';
?>
<!DOCTYPE html>
<!-- danh sach san pham -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San pham</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>

<body>
<style>
*{
    padding:0px;
    margin:0px;
}
    
</style>
    <div class="container">
        <h2>Products</h2>
        <hr>
        <div class="row">
            <?php
             foreach ($ds as $sp) {
              echo "<div class='sp col-sm-6 col-md-4'>";
              echo "<img src='../images/{$sp->image}' alt=''><br>";
              echo "<p>$sp->name</p> <br>";
              echo "<p>$sp->price</p> <br>";
              echo "<a href='' class='btn btn-block btn-success'>Order</a>";
              echo "</div>";
             }
            ?>

        </div>
    </div>
</body>

</html>