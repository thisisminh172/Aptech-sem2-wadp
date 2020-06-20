<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="../../lib/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h3 class="">Login</h3>
                <form action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="ckRemember" id="rememberMe">
                        <label for="rememberMe">Remember me</label>
                        
                    </div>
                    <div class="form-group">
                        <input type="submit" value="LOGIN" name="btnLogin" class="btn btn-success">
                    </div>
                    <a href="#">Forget your password?</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>