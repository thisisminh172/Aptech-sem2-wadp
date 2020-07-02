<?php
include_once '../../lib/lib.inc';
session_start();
if(isset($_POST['btnLogin'])){
    $link = getConnect();
    $username = mysqli_real_escape_string($link,$_POST['txtUsername']);
    $password = mysqli_real_escape_string($link,$_POST['txtPassword']);
    if($username == 'airAD' && $password=='001100'){
        $_SESSION['is_login']=1;
        header('location: FlightControl.php');
    }else{
        echo "tk ko tồn tại";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">

        <h1>Login</h1>
        <hr>
        <div class="row">
            <form action="" method="POST" class="col-md-4">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="txtUsername" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="txtPassword" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="Login" name="btnLogin" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-dark">
                </div>
            </form>
        </div>
        <a href="view.php">go back to list</a>

    </div>
</body>

</html>