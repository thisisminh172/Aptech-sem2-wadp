<?php
	session_start();
	include_once '../../lib/lib.inc';
	if (!(($_SESSION['is_login'] == 1) && ($_SESSION['role'] == 2))) {
		header('location: login.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staff</title>
</head>

<body>
    <div class="container">
        <p>Xin chào                     <?php echo "<b>{$_SESSION['user_login']}</b>"; ?> (<a href="logout.php">log out</a>)</p>
        <h1>STAFF LIST</h1>
        <hr>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php displayEmployeeList();?>
            </tbody>
        </table>

    </div>
</body>

</html>
<?php
	function displayEmployeeList()
	{
		$cn = getConnect();
		$sql = "SELECT * FROM tbEmployee";
		$result = mysqli_query($cn, $sql);
		while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
			echo "<tr>
        <td>{$row[0]}</td>
        <td>{$row[2]}</td>
        <td>{$row[3]}</td>
    </tr>";
		}
	}

?>