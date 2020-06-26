<!--This is a edit page-->
<?php
include_once '../../lib/lib.inc';
if (empty($_GET['code'])) {
    header("location: adminProduct.php");
    exit();
}
$code = (int) $_GET['code'];
$link = getConnect();
$sql = "SELECT * FROM `tbProducts` WHERE `code`={$code}";
$result = mysqli_query($link, $sql);
if ($result == false) {
  die("Error: " . mysqli_errno($link));
 }

 if (mysqli_num_rows($result) == 0) {
  die("Error: " . mysqli_errno($link));
 }
$row = mysqli_fetch_array($result);
?>
<?php
if (isset($_POST['btnChange'])) {
    $name = $_POST['txtProductName'];
    $price = $_POST['numProductPrice'];
    $proDes = $_POST['txtDes'];


    $sql = "UPDATE `tbProducts` SET `name`='{$name}',`price`={$price},`descriptions`='{$proDes}' WHERE `code`= {$code}";
    if (mysqli_query($link, $sql)) {
        echo "Thay đổi thành công";
    } else {
        echo "Thất bại";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit product</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h3>Change product info</h3>
            <div class="row">
                <form action="" method="post" class="col-md-5">
                    <div class="form-group">
                        <label for="">Product name</label>
                        <input type="text" name="txtProductName" id="" class="form-control" value="<?php echo $row['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="">Unit price</label>
                        <input type="number" name="numProductPrice" id="" value="<?php echo $row['price']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Product description</label>
                        <textarea name="txtDes" id="" cols="20" rows=5" placeholder="" class="form-control"><?php echo $row['descriptions']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Change" name="btnChange" class="btn btn-warning">
                        <input type="reset" value="Reset" class="btn btn-dark">
                    </div>
                    <a href="adminProduct.php">Go back to the list!</a>
                </form>

            </div>

        </div>

    </body>
</html>
