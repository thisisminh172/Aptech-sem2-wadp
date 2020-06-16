<?php
//kiem tra xem trang L03_Personal.html da duoc chay chua (ie. da nhap lieu va bam submit chua)
if(isset($_GET["btnSubmit"]) == FALSE){
    //trang nhap lieu HTML chua duoc chay
    header("location: L03_Personal.html");
    exit();
}

?>
<!DOCTYPE html>
<!--
doc va xu ly so lieu duoc nhap o trang L03_Personal.html
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Personal details</title>
    </head>
    <body>
        <div>Thong tin khach hang</div>
        <?php
//        echo "<pre>";
//        print_r($GLOBALS);
//        echo "</pre>";

       
        // put your code here
        //doc du lieu nhap trong cac o nhap o form
        $ten = $_GET["txtFirst"];
        $ho = $_GET["txtLast"];
        $dienthoai = $_GET["txtContact"];
        $diachi = $_GET["txtAddress"];

        //xuat du lieu ra man hinh
        echo "<p>Ho Ten: $ho $ten </p>";
        echo "<p>Dien thoai: $dienthoai </p>";
        echo "<p>Dia chi: $diachi</p>";
        
        ?>
    </body>
</html>
