<?php
include_once '../../lib/lib.inc';

if(!(($_COOKIE['is_login']==1) && ($_COOKIE['role']==2))){
    header('location: login.php');
    exit();
}
function getProductList2() {
    include_once '../../lib/lib.inc';
    $link = getConnect();
    $sql = "SELECT * FROM `tbProducts`";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>{$row['code']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "<td><a href='editProduct.php?code={$row['code']}' class='btn btn-info mr-2'>Edit</a><a href='deleteProduct.php?code={$row['code']}' class='btn btn-warning' onclick='return confirmDelete()'>Delete</a></td>";
        echo "</tr>";
    }
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Product list</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="confirmDelete.js"></script>
    </head>

    <body>
        <div class="container">
            <h3 class="">Products List</h3>
            <hr>
            <a href="logout.php">Logout</a>

            <a href="addProduct.php" class="btn btn-success mb-2">Add New Product</a>
            <div class="row">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product name</th>
                            <th>Unit price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        getProductList2();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>

</html>

