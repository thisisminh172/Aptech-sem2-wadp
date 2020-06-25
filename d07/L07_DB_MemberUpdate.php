<?php
 if (empty($_GET['id'])) {
  header('location: L07_DB_MemberList.php');
  exit();
 }

 include_once '../lib/lib.inc';
 $link = getConnect();
 $user = $_GET['id'];
 $sql  = "SELECT * FROM tbMember where username = '{$user}'";

 $result = mysqli_query($link, $sql);
 if ($result == false) {
  die("Error: " . mysqli_errno($link));
 }

 if (mysqli_num_rows($result) == 0) {
  die("Error: " . mysqli_errno($link));
 }
 $row = mysqli_fetch_array($result, MYSQLI_BOTH);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update member</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h3>Update member</h3>
        <hr>
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="" id="" value="<?php echo $row['username']; ?>" class="form-control"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="" id="" value="<?php echo $row['password']; ?>"
                            class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="txtEmail" id="" value="<?php echo $row['email']; ?>"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">yob</label>
                        <input type="number" name="yob" id="" value="<?php echo $row['yob']; ?>" class="form-control"
                            required>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-success" value="Submit Changes" name="btnSubmit"
                            id="btnSubmit">
                        <input type="reset" class="btn btn-info" value="Reset">
                    </div>
                </form>
                <a href="L07_DB_MemberList.php">Go back to list</a><br>
                <a href="change_password.php?id=<?php echo $row['username']; ?>">Change password</a>
            </div>
        </div>

    </div>
</body>
<?php
 if (isset($_POST['btnSubmit'])) {

  $email = $_POST['txtEmail'];
  $yob   = (int)$_POST['yob'];

  $sql = "UPDATE `tbMember` SET `email` = '{$email}',`yob` = {$yob} WHERE `username`='{$user}'";
  $result = mysqli_query($link,$sql);
  if(mysqli_num_rows($result)>=0){
      echo "<script>alert('Changed successfull');</script>";
  }else{
    echo "<script>alert('Fail to change');</script>";
  }
  header('location: L07_DB_MemberList.php');

 }
?>

</html>