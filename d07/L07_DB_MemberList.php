<!DOCTYPE html>
<!-- in danh sach cac thanh vien trong bang [tbMember] cua csdl 1910db -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Member List</h2>
        <hr>

        <a href="L07_DB_MemberInsert.php" class="btn btn-warning">INSERT MEMBER</a>
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <table class="table table-hover table-borderd table-striped">
                    <thead>
                        <tr>
                            <th>Usename</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Yob</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         getDataMember();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>




        <?php
         function getDataMember()
         {
          include_once '../lib/lib.inc';
          include_once '../lib/data.inc';
          $link = getConnect();
          $sql  = "SELECT * FROM tbMember";
          //thuc hien lenh truy van
          $result = mysqli_query($link, $sql);
          if ($result == false) {
           die("Error: Loi sai truy van du lieu");
          }
          //duyet cac dong du lieu trong [$result] de xuat ra man hinh
          while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
           echo "<tr>";
           printf("<td>%s</td><td>%s</td><td>%s</td><td>%s</td>" . "<td><a href='L07_DB_MemberDetail?id={$row[0]}' class='btn btn-info'>detail</a>
           <a href='L07_DB_MemberUpdate?id={$row[0]}' class='btn btn-success'>update</a>
           <a href='L07_DB_MemberDelete?id={$row[0]}' class='btn btn-danger' onclick='return yesno()'>remove</a></td>"
            , $row[0], $row[1], $row[2], $row[3]);
           echo "</tr>";
          }

          mysqli_close($link);
         }

        ?>
    </div>

</body>
<script>
function yesno() {
    return confirm("Are you sure ?");
}
</script>

</html>