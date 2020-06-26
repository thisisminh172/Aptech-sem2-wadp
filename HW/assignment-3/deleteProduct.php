<?php

include_once '../../lib/lib.inc';
if (empty($_GET['code'])) {
    header("location: adminProduct.php");
    exit();
}

$code = (int) $_GET['code'];
$link = getConnect();
$sql = "DELETE FROM `tbProducts` WHERE `code`={$code}";
$result = mysqli_query($link, $sql);
if ($result == false) {
    die("Error: " . mysqli_errno($link));
}

header('location: adminProduct.php');


