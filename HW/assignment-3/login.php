<!--This is a login page-->
<?php
include_once '../../lib/lib.inc';
if (isset($_POST['btnLogin'])) {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $link = getConnect();
    $sql = "SELECT * FROM `tbUsers` WHERE `username` = '$username' AND `password`='$password'";
    $result = mysqli_query($link, $sql);
    
    $row = mysqli_fetch_array($result);
    
    
    if (!empty($row)) {
        setcookie('is_login', 1, time() + 84600);
        setcookie('username', $row['username'], time() + 84600);
        setcookie('role', $row['role'], time() + 84600);
        
        if($row['role']=='2'){
            header('location: adminProduct.php');
        }else{
            header('location: viewProduct.php');
        }
        
    } else {
        echo "Tài khoản không tồn tại";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h3>Login</h3>
            <div class="row">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="txtUsername" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="txtPassword" required="">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" name="btnLogin" class="btn btn-success">
                        <input type="reset" value="Reset"class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>


