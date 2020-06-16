<?php
if (isset($_POST["btnSubmit"]) == FALSE) {
    //trang nhap lieu HTML chua duoc chay
    header("location: L03_Login.html");
    exit();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $username = $_POST["txtUsername"];
        $password = $_POST["txtPassword"];

        if (($username === "aptech" && $password === "123") || ($username === "admin" && $password === "abc")) {
            echo "<h2>Welcome</h2>";
            echo "<p>username : $username</p>";
            echo "<p>password : $password</p>";
            echo "<a href='javascript:history.back()'>go back</a>";
        } else {
            echo "<h2>Tai khoan ko hop le</h2>";
            echo "<p>Please, sign-in again !</p>";
            echo "<a href='javascript:history.back()'>go back</a>";
        }
        ?>
    </body>
</html>
