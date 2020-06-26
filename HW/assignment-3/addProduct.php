<?php
include_once '../../lib/lib.inc';
if(isset($_POST['btnSubmit'])){
    $proName = $_POST['txtProductName'];
    $proPrice = $_POST['numProductPrice'];
    $proDes = $_POST['txtDes'];
    $link= getConnect();
    $sql = "INSERT INTO `tbProducts`(`name`,`price`,`descriptions`) VALUES('{$proName}',{$proPrice},'{$proDes}')";
    $result = mysqli_query($link,$sql);
    
    if($result){
        echo "Thêm sản phẩm thành công";
    }else{
        echo "Thêm sản phẩm thất bại";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add new product</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <h3>Add a new product</h3>
        <hr>
        <div class="row">
            <form action="" method="post" class="col-md-5">
                <div class="form-group">
                    <label for="">Product name</label>
                    <input type="text" name="txtProductName" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Unit price</label>
                    <input type="number" name="numProductPrice" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Product description</label>
                    <textarea name="txtDes" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" name="btnSubmit" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-dark">
                </div>
                <a href="adminProduct.php">Go back to the list!</a>
            </form>
        </div>
    </div>
</body>

</html>