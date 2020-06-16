<?php
// kiem tra thong tin dang nhap cua trang L04_Login.php
if (isset($_POST['btnSubmit']) == false) {
 header('location: L04_Login.php');
 exit();
}

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
// $ckRem = isset($_POST['ckRemember']);
if ($username == "aptech" && $password == "123") {
 if (isset($_POST['ckRemember'])) {
// tao bien cookie ghi nho tai khoan dang nhap
  setcookie("username", $username, time() + 60 * 3);
  setcookie("password", $password, time() + 60 * 3);
 }
 header("location: L04_ChangePassword.php");
}else{
    echo "<script>alert('Invalid account !Re-entry')</script>";
    //header("location: L04_Login.php");
    echo '<script>window.location = "L04_Login.php"</script>';
}
