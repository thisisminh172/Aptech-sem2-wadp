<?php
include_once 'data.inc';
session_start();
if (empty($_SESSION['cart'])) {
    header('location: L08_Product.php');
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Cart</title>
        <link href="../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h3>Your cart</h3>
            <hr>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ten SP</th>
                        <th>Đơn giá</th>
                        <th>SL</th>
                        <th>Thành tiền</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $amt = 0; //bien chua thanh tien cua moi 1 dong
                    $total = 0; //bien tong tri gia don hang
                    $cart = $_SESSION['cart'];
                    $totalQuantity = 0;
                    foreach ($cart as $id => $sp) {
                        $amt = $sp->price * $sp->quantity;
                        $totalQuantity += $sp->quantity;
                        $total += $amt;
                        $i++;
                        echo "<tr>";
                        echo "<td>$i</td>";
                        echo "<td>$sp->name</td>";
                        echo "<td>$sp->price</td>";
                        echo "<td>$sp->quantity</td>";
                        echo "<td>$amt</td>";
                        echo "</tr>";
                    }
                    
                    $_SESSION['total-quantity']=$totalQuantity;
                    ?>
                </tbody>
            </table>
            <p class="text-center float-right">Tổng: <?php echo $total; ?></p>
            <a href="L08_Product.php">Quay ve trang san pham</a>

        </div>

    </body>
</html>
