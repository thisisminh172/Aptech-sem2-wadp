<?php


function getBookDetail(){
    include_once '../../lib/lib.inc';
    $bookID =  $_GET['code'];
    //echo $bookID;
    $link = getConnect();
    $sql = "SELECT * FROM `tbBook` where ISBN = $bookID ";
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result)==0){
        echo "There is no book in datbase";
        exit();
    }
    
    $row = mysqli_fetch_array($result,MYSQLI_BOTH);
    
    echo "<p>ISBN: $row[0]</p>";
    echo "<p>Title: $row[1]</p>";
    echo "<p>Author: $row[2]</p>";
    echo "<p>Edition: $row[3]</p>";
    
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h3>DEtail</h3>
        <?php
        getBookDetail();
        ?>
    </body>
</html>
