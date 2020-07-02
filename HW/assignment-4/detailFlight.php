<?php
    session_start();
    if (!isset($_GET['code'])) {
        header('location: FlightControl.php');
        exit();
    }

    include_once '../../lib/lib.inc';

    $code = $_GET['code'];
    $link = getConnect();
    $sql = "SELECT * FROM tbFlights WHERE `AircraftCode`='{$code}'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    
</head>

<body>
    <div class="container">
        <h1>Flight detail</h1>
        <p><span class="font-weight-bold">Aircraft Code: </span><?php echo "{$row['AircraftCode']}"; ?></p>
        <p><span class="font-weight-bold">Flight Type: </span><?php echo "{$row['FType']}"; ?></p>
        <p><span class="font-weight-bold">Source: </span><?php echo "{$row['Source']}"; ?></p>
        <p><span class="font-weight-bold">Destination: </span><?php echo "{$row['Destination']}"; ?></p>
        <p><span class="font-weight-bold">DepTime: </span><?php echo "{$row['DepTime']}"; ?></p>
        <p><span class="font-weight-bold">Journey Hours: </span><?php echo "{$row['JourneyHrs']}"; ?></p>
        <a href="FlightControl.php">Go back to Flight control</a>
    </div>
    

</body>

</html>