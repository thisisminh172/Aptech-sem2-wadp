<?php
unset($_COOKIE['is_login']);
unset($_COOKIE['username']);
unset($_COOKIE['role']);

setcookie("is_login", "", 1); 
setcookie("username", "", 1); 
setcookie("role", "", 1); 
header('location: login.php');



