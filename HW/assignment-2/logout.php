<?php
session_start();
unset($_SESSION['is_login']);
unset($_SESSION['role']);
unset($_SESSION['user_login']);
// thoát khỏi xóa hết session

header('location: login.php');
?>