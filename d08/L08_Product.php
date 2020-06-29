<?php
include_once 'data.inc';
session_start();
?>
<!DOCTYPE html>
<!-- danh sach san pham -->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>San pham</title>
        <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    </head>

    <body>
        <style>
            *{
                padding:0px;
                margin:0px;
            }
            a {
                font-size: 70px;
            }
            #icon-shopping-cart{
                float:right;
                position: relative;
                display: inline-block;
            }
            .box-cart{
                height: 150px;
            }
            #num-product-cart{
                position: absolute;
                top: 0px;
                right: 5px;
                display: inline-block;
                width: 50px;
                height:50px;
                border-radius: 50%;
                background: red;
                text-align: center;
                color: #fff;
                font-weight: bold;
                font-size: 20px;
            }
            .clear{
                clear: both;
            }

        </style>
        <div class="container">
            <h2>Products</h2>
            <div class="box-cart">
                <div id="icon-shopping-cart">
                    <a href="L08_Product_Cart_View.php"><i class="fa fa-shopping-cart fa-lg"></i></a>
                    <p id="num-product-cart"><?php if(!empty($_SESSION['total-quantity'])){echo $_SESSION['total-quantity'];}else{echo 0;} ?></p>         
                    <div class="clear"></div>
                </div>
            </div>




            <div class="row text-center">
                <?php
                foreach ($ds as $sp) {
                    echo "<div class='sp col-sm-6 col-md-4'>";
                    echo "<img src='../images/{$sp->image}' alt=''><br>";
                    echo "<p>$sp->name</p> <br>";
                    echo "<p>$sp->price</p> <br>";
                    echo "<a href='L08_Product_Cart.php?id=$sp->id' class='btn btn-success'>Order</a>";
                    echo "</div>";
                }
                ?>

            </div>
        </div>
    </body>

</html>