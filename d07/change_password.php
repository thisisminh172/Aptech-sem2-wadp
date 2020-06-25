<?php
 include_once "../lib/lib.inc";
 $user = $_GET['id'];
 if (isset($_POST['btnSubmit'])) {
  $newPass = $_POST['txtNewPass'];

  $link   = getConnect();
  $sql    = "UPDATE `tbMember` SET `password`='{$newPass}' WHERE `username`='{$user}'";
  $result = mysqli_query($link, $sql);
  
  if ($result) {
   echo "<script>alert('Thay đổi mật khẩu thành công');</script>";
  } else {
   echo "<script>alert('Thay đổi mật khẩu thất bại');</script>";
  }
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đổi mật khẩu</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
    <h3>Change password</h3>
        <div class="row">
            <div class="col-md-offset-2 col-md-3">
            <p>Xin chào <b><?php echo $user; ?></b></p>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Old password</label>
                        <input type="password" id="" class="form-control" name="txtOldPass">
                    </div>
                    <div class="form-group">
                        <label for="">New password</label>
                        <input type="password" id="txtNewPass" class="form-control" name="txtNewPass">
                    </div>
                    <div class="form-group">
                        <label for="">New password confirm</label>
                        <input type="password" id="txtNewPass1" class="form-control" name="txtNewPass1">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit change" class="btn btn-success" name="btnSubmit">
                        <input type="reset" value="Reset" class="btn btn-info">
                    </div>
                </form>
                <a href="L07_DB_MemberList.php">Go back member list</a>
            </div>
        </div>

    </div>
</body>

</html>