<!--This is a login page-->

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
                        <input type="text" class="form-control" id="username" name="txtUsername">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="txtPassword">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" name="btnLogin" class="btn btn-success">                              
                        <input type="reset" value="Reset"class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>


