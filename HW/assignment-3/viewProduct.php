<?php
if(!(($_COOKIE['is_login']==1) && ($_COOKIE['role']==1))){
    header('location: login.php');
    exit();
}
function getProductList1() {
    $price_from=10000;
    $price_to=200000;
    if(isset($_GET['btnSearch'])){
        $price_from = !empty($_GET['numPriceFrom'])?(int)$_GET['numPriceFrom']:10000;
        $price_to = !empty($_GET['numPriceTo'])?(int)$_GET['numPriceTo']:200000;
    }
    include_once '../../lib/lib.inc';
    $link = getConnect();
    $sql = "SELECT * FROM `tbProducts` WHERE `price` BETWEEN $price_from AND $price_to";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
        echo "<tr>";
        echo "<td>{$row['code']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "</tr>";
    }
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>View product</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="container">
            <h3 class="">Products List</h3>
            <hr>
            <a href="logout.php">Logout</a>


            <div class="row">
                <form action="" class="row">
                    <div class="form-inline">
                        <label for="">Input Price from&nbsp;</label>
                        <input type="number" name="numPriceFrom" class="form-control">
                    </div>
                    <div class="form-inline">
                        <label for="">&nbsp;to&nbsp;</label>
                        <input type="number" name="numPriceTo" class="form-control">
                    </div>
                    <div class="btn-group ">
                        <input type="submit" name="btnSearch" class="btn btn-success mg-top form-control m-2">
                    </div>
                </form>

            </div>
            <div class="row">
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product name</th>
                            <th>Unit price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        getProductList1();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </body>

</html>
