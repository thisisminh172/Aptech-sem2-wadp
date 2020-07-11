<?php
//if(empty($_GET["ok"])){
//    header("location:L10_search.php");
//    exit();
//}

$sql = "select * from tbproduct ";
$name = isset($_GET["name"]) ? $_GET["name"] : "";
if (!empty($name)) {
    $sql .= " where productName like '%$name%'";
}

include_once '../lib/lib.inc';
$link = getConnect();
$result = $link->query($sql);
if ($result->num_rows > 0) {
    echo "<table class='table table-hover table-striped table-bordered'>"
        . "<thead><tr><th>ID<th>Name<th>Price<th>Quantity</tr></thead>"
        . "<tbody>";
//    while ($row = $result->fetch_assoc()) {       
//        printf("<tr><td> %s <td> %s <td> %s <td> %d </tr>", 
//            $row["ProductID"],$row["ProductName"],$row["UnitPrice"], 
//            $row["Quantity"] );
//    }
    
    while ($row = $result->fetch_row()) {       
        printf("<tr><td> %s <td> %s <td> %s <td> %d </tr>", 
            $row[0],$row[1],$row[2], $row[3] );
    }
    echo "</tbody></table>";
} else {
    echo "0 results !";
}

$link->close();
?>