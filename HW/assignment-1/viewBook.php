<?php
include_once '../../lib/lib.inc';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>

<body>
<style>
    table, a , form{
        margin:30px;
    }
</style>
    <div class="container">
        <h1>Book list</h1>
        <hr>
        <a href="insertBook.php">Created New</a>
        <form action="">
            <label for=""><strong><u>Price</u></strong></label>&nbsp;&nbsp;
            Form $<input type="number" name="numPriceFrom" id="" min="0" max="100">&nbsp;
            To $<input type="number" name="numPriceTo" id="" min="0" max="100">&nbsp;
            <input type="submit" value="SEARCH" name="btnSearch">
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>Book ID</th>
                    <th>Book Name</th>
                    <th>Price</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    displayBookList();
                ?>
            </tbody>
        </table>
    </div>
    <?php
function displayBookList(){
    $price_from=0;
    $price_to=100;
    if(isset($_GET['btnSearch'])){
        $price_from = !empty($_GET['numPriceFrom'])?(float)$_GET['numPriceFrom']:0;
        $price_to = !empty($_GET['numPriceTo'])?(float)$_GET['numPriceTo']:100;
    }
    
    


    $cn = getConnect();
    $sql = "SELECT * FROM `tbBook` where `price` between $price_from and $price_to";
    $result = mysqli_query($cn,$sql);



    while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
        echo "<tr>";
        printf("<tr>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
        <td>%s</td>
    </tr>"
        , $row[0], $row[1], $row[2], $row[3]);
        echo "</tr>";
       }
}
?>

</body>


</html>