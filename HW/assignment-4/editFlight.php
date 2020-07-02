<?php
if (!isset($_GET['code'])) {
    header('location: FlightControl.php');
    exit();
}
include_once '../../lib/lib.inc';
$code = $_GET['code'];
$link = getConnect();
$sql = "SELECT * FROM tbFlights WHERE `AircraftCode`='{$code}'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result,MYSQLI_BOTH);

if(isset($_POST['btnUpdate'])){
    $aircraftCode = mysqli_real_escape_string($link,$_POST['txtCode']);
    $fType = mysqli_real_escape_string($link,$_POST['txtType']);
    $source = mysqli_real_escape_string($link,$_POST['txtSource']);
    $destination = mysqli_real_escape_string($link,$_POST['txtDestination']);
    $depTime = mysqli_real_escape_string($link,$_POST['depTime']);
    $hours = (int) mysqli_real_escape_string($link,$_POST['numHours']);
    $sql = "UPDATE `tbFlights` SET `FType`='{$fType}',`Source`='{$source}',`Destination`='{$destination}',`DepTime`='{$depTime}',`JourneyHrs` = {$hours} WHERE `AircraftCode`='{$aircraftCode}'";
    $result = mysqli_query($link,$sql);
    if($result==TRUE){
        header('location: FlightControl.php');
    }else{
        echo "Error: ".mysqli_error($link);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit flight</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <form action="" method="POST">
                        <h3>Edit flight</h3>
                        <div class="form-group">
                            <label for="">Aircraft Code</label>
                            <input type="text" name="txtCode" readonly class="form-control" value="<?php echo $row['0'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Flight Type</label>
                            <input type="text" name="txtType" class="form-control" value="<?php echo $row['1'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Source</label>
                            <input type="text" name="txtSource" class="form-control" value="<?php echo $row['2'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Destination</label>
                            <input type="text" name="txtDestination" class="form-control" value="<?php echo $row['3'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="">DepTime</label>
                            <input type="time" name="depTime" class="form-control" value="<?php echo $row['4'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Journey Hours</label>
                            <input type="number" name="numHours" class="form-control" value="<?php echo $row['5'] ?>" min="1" max="20">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Update" name="btnUpdate" class="btn btn-success">
                            <input type="reset" value="Reset" class="btn btn-dark">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </body>
</html>