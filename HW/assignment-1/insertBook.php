<?php
	include_once '../../lib/lib.inc';
?>
<!-- Create new member here -->
<?php
	if (isset($_GET['btnSubmit'])) {
		$name = $_GET['txtName'];
		$author = $_GET['txtAuthor'];
		$price = (float) $_GET['numPrice'];

		$cn = getConnect();
		$sql = "INSERT INTO `tbBook`(`name`,`author`,`price`)" . " VALUE('$name','$author',$price)";
		if (mysqli_query($cn, $sql)) {
			echo "<script>alert('Insert new book successed')</script>";
		} else {
			echo "<script>alert('Failed')</script>";
		}
	}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        form label{
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }
    </style>
    <div class="container">
        <h1>Create New Book</h1>
        <hr>
        <form action="">
            <label for="name">Name</label>
            <input type="text" name="txtName" id="name" required><br>
            <label for="author">Author</label>
            <input type="text" name="txtAuthor" id="author" required><br>
            <label for="price">Unit price</label>
            <input type="number" name="numPrice" id="price" required min='0' max='100'><br>
            <input type="submit" name="btnSubmit" value="Submit">
            <input type="reset" value="Reset">
        </form>
        <br><br><br>
        <a href="viewBook.php">Go back!</a>
    </div>
</body>

</html>