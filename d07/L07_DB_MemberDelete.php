<?php
 if (empty($_GET['id'])) {
  header('location: L07_DB_MemberList.php');
  exit();
 }

 include_once '../lib/lib.inc';
 $link = getConnect();
 $user = $_GET['id'];

 //chuoi len xoa mau tin trong bang [tbMember] co username
 $sql = "DELETE FROM tbMember where username = '{$user}'";

 $result = mysqli_query($link, $sql);

 mysqli_close($link);

 if ($result == false) {
  echo "<script>alert('ERROR: Cannot remove!!!');</script>";

 }
header("location: L07_DB_MemberList.php");
