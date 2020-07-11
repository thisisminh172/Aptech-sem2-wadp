<?php
require_once '../../lib/database.php';

if(isset($_POST['btnSubmit'])){
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    $users = get('tbUsers','',"username = '{$username}' and password = '{$password}'");
    if(empty($users)){
        die();
    }
    echo "ole";
    
    
    
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../../lib/js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="../../lib/js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <h2>Login</h2>
            <hr>
            <div class="row">
                <div class="col-md-offset-2 col-md-5">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="txtUsername" id="txtUsername" required value="admin">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtPassword" id="txtPassword" required value="admin">
                        </div>
                        <div>
                            <input type="submit" value="Sign in" name="btnSubmit" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
