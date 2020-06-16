
<!-- form dang nhap -->
<?php
//check cookie dang nhap nho mat khau
function check_cookie($value){
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <h3>Login</h3>
                    <form action="L04_Login_Process.php" method="POST">
                        <div class="form-group">
                            <label for="txtUsername">Username</label>
                            <input type="text" name="txtUsername" class="form-control" id="txtUsername" required="">
                        </div>
                        <div class="form-group">
                            <label for="txtPassword">Password</label>
                            <input type="password" name="txtPassword" class="form-control" id="txtPassword" required="">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="ckRemember" id="ckRemember" checked="">
                            <label for="ckRemember">Remember me</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-danger" value="Submit" >
                            <input type="reset" name="btnReset" id="btnReset" class="btn btn-info" value="Reset" >

                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>
