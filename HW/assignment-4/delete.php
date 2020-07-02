<?php
if(empty($_GET['code'])){
    header('location: FlightControl.php');
    exit();
}
 include_once '../../lib/lib.inc';

    $code = $_GET['code'];
    $link = getConnect();
    $sql = "DELETE FROM tbFlights WHERE `AircraftCode`='{$code}'";
    $result = mysqli_query($link, $sql);
    if($result == TRUE){
        echo "<script>alert('Delete the flight successfully')</script>";
        header('location: FlightControl.php');
        
    }else{
        echo "Error: ".mysqli_error($link);
    }