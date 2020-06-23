<!-- Trang in thong tin chi tiet cua thanh vien co id duoc goi den -->
<?php
 if (empty($_GET['id'])) {
  header('location: L07_DB_MemberList.php');
  exit();
 }

 include_once '../lib/lib.inc';
 $link = getConnect();
 $user = $_GET['id'];
 $sql  = "SELECT * FROM tbMember where username = '{$user}'";

 $result = mysqli_query($link,$sql);
 if($result==false){
    die("Error: ".mysqli_errno($link));
 }

 if(mysqli_num_rows($result)==0){
    die("Error: ".mysqli_errno($link));
 }
 $row = mysqli_fetch_array($result, MYSQLI_BOTH);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiet thanh vien</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h2>Chi tiết thành viên</h2>
        <hr>
        <p>Username: <?php echo $row[0]; ?></p>
        <p>Password: <?php echo $row[1]; ?></p>
        <p>Email: <?php echo $row[2]; ?></p>
        <p>Year of Birth: <?php echo $row[3]; ?></p>
        <hr>
        <a href="javascript:history.back()">Back to Member List</a>
    </div>
</body>
</html>