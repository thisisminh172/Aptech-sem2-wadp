<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../lib/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

    <title>change password</title>
</head>
<?php
 $pass = $_COOKIE['password'];
?>

<body>
    <h1 class="text-center">Change password</h1>
    <div class="container row col-md-offset-3 col-md-5">
        <form action="" method="post" onsubmit="return kt();">
            <div class="form-group">
                <label for="">Old password</label>
                <input type="password" name="txtOldPassword" id="txtOldPassword" class="form-control">
                <input type="hidden" name="txtHid" id="txtHid" value="<?php echo $pass; ?>">
            </div>
            <div class="form-group">
                <label for="">New password</label>
                <input type="password" name="txtNewPassword1" id="txtNewPassword1" class="form-control">
            </div>
            <div class="form-group">
                <label for="">New password confirmed</label>
                <input type="password" name="txtNewPassword2" id="txtNewPassword2" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-info">
            </div>
        </form>
    </div>
</body>
<?php
 if (isset($_COOKIE['password']) == false) {
  header("location: L04_Login.php");
  exit();
 }
?>
<script>
function kt() {

    alert("hello");
    var pass1 = $("#txtNewPassword1").val();
    var pass2 = $("#txtNewPassword2").val();
    var oldPass = $("#txtOldPassword").val();
    var logonPass = $("#txtHid").val();


    if (pass1 != pass2) {
        alert("new password must be the same with confirmed password");
        return false;
    } else {
        if (oldPass != logonPass) {
            alert("incorect old password");
        } else {
            alert("good");
            return false;
        }

    }
}

</script>

</html>