<!DOCTYPE html>
<!-- them 1 thanh vien moi vo bang member -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them thanh vien</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <script src="../lib/js/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#formInsert").submit(function() {
            var p1 = $("#txtPass").val();
            var p2 = $("#txtPass2").val();
            if (p1 != p2) {
                alert("Password is not the same with confirmed-password");
                return false;
            } else {
                return true;
            }
        });
    });
    </script>

</head>

<body>
    <div class="container">
        <h2>Thêm thành viên mới</h2>
        <hr>
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <form action="" method="post" name="formInsert" id="formInsert">
                    <div class="form-group">
                        <label for="txtUser">Username</label>
                        <input type="text" class="form-control" id="txtUser" name="txtUser" required>
                    </div>
                    <div class="form-group">
                        <label for="txtPass">Password</label>
                        <input type="password" class="form-control" id="txtPass" name="txtPass" required>
                    </div>
                    <div class="form-group">
                        <label for="txtPass2">Password Confirm</label>
                        <input type="password" class="form-control" id="txtPass2" name="txtPass2" required>
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
                    </div>
                    <div class="form-group">
                        <label for="yob">Year of Birth</label>
                        <input type="number" value="2006" min="1900" max="2006" class="form-control" id="yob" name="yob"
                            required>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Submit" name="btnSubmit" id="btnSubmit">
                        <input type="reset" class="btn btn-info" value="Reset">
                    </div>

                </form>
            </div>
        </div>

    </div>
    <?php

     //xu ly du lieu nhap trong form duoc submit len server
     //doan code nay chay tren server, sau khi bam [$submit]
     if (isset($_POST['btnSubmit'])) {
      include_once '../lib/lib.inc';
      //lay du lieu nhap trong form
      $user  = $_POST['txtUser'];
      $pass  = $_POST['txtPass'];
      $email = $_POST['txtEmail'];
      $yob   = $_POST['yob'];

      $link = getConnect();


      //lenh insert
      $sql = "INSERT INTO `tbMember`(`username`,`password`,`email`,`yob`) " . "value('$user','$pass','$email',$yob)";
      //thuc hien lenh insert
      if (mysqli_query($link, $sql)) {
       echo "<script>alert('Insert new member successed')</script>";
      } else {
       echo "<script>alert('Fail: can not insert new member')</script>";
      }
      
      header('location: L07_DB_MemberList.php');

     }
    ?>
</body>

</html>