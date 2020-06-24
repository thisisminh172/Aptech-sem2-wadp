<?php
	
	include_once '../../lib/lib.inc';
?>

<?php
	if (isset($_POST['btnLogin'])) {
        session_start();
		$email = $_POST['txtEmail'];
		$password = $_POST['txtPassword'];
		$cn = getConnect();
        $sql = "SELECT * FROM `tbEmployee` WHERE `email`='{$email}' AND `password`='{$password}'";
        $result = mysqli_query($cn,$sql);

        if(mysqli_num_rows($result)==1){
            $_SESSION['is_login'] = 1;
        }

        $row = mysqli_fetch_array($result,MYSQLI_BOTH);
        $_SESSION['role']=(int) $row['role'];
        $_SESSION['user_login'] = $row['fullname'];

        if(($_SESSION['is_login']==1) && ($_SESSION['role']==1)){
            header("location: admin.php");
        }else if(($_SESSION['is_login']==1) && ($_SESSION['role']==2)){
            header("location: staff.php");
        }
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <style>
    form label {
        width: 80px;
        display: inline-block;
    }
    </style>
    <div class="container">
        <h3>LOGIN</h3>
        <hr>

        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="email" name="txtEmail" id="email"><br><br>
            <label for="password">Password</label>
            <input type="password" name="txtPassword" id="password"><br><br>
            <input type="submit" value="Login" name="btnLogin">
            <input type="reset" value="Reset">
        </form>
    </div>
</body>

</html>