<?php
session_start();

if($_SESSION['is_login']!==1){
    header('location: login.php');
    exit();
}

include_once '../../lib/lib.inc';
$link = getConnect();
if(isset($_POST['btn_submit'])){
    $aircraftCode = mysqli_real_escape_string($link,$_POST['txtAircraftCode']);
    $fType = mysqli_real_escape_string($link,$_POST['rdType']);
    $source = mysqli_real_escape_string($link,$_POST['txtSource']);
    $destination = mysqli_real_escape_string($link,$_POST['txtDestination']);
    $depTime = mysqli_real_escape_string($link,$_POST['depTime']);
    $hours = (int) mysqli_real_escape_string($link,$_POST['numHours']);
    $sql = "INSERT INTO tbFlights VALUES('{$aircraftCode}','{$fType}','{$source}','{$destination}','{$depTime}',{$hours})";
    $result = mysqli_query($link,$sql);
    if($result==TRUE){
        header('location: FlightControl.php');
    }else{
        echo "Error: ".mysqli_error($result);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add new flight</title>
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <style>
    * {
        padding: 0px;
        margin: 0px;
    }

    #new-flight-form {
        padding: 25px;
        border: 1px solid black;
    }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-sm-5 form-wrapper">
                <h3>Add New Flight</h3>
                <form action="" method="post" id="new-flight-form">
                    <div class="form-group">
                        <label for="">Aircraft code</label>
                        <input type="text" name="txtAircraftCode" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Flight type</label><br>
                        <input type="radio" name="rdType" id="" value="Boeing" checked>Boeing
                        <input type="radio" name="rdType" id="" value="Airbus" class="ml-3">Airbus
                    </div>
                    <div class="form-group">
                        <label for="">Source</label>
                        <input type="text" name="txtSource" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Destination</label>
                        <input type="text" name="txtDestination" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Dep Time</label>
                        <input type="time" name="depTime" id="" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Journey Hours</label>
                        <input type="number" name="numHours" id="" class="form-control" min="1" max="20">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" name="btn_submit" class="btn btn-success">
                        <input type="reset" value="Reset" class="btn btn-dark"><br>
                        <a href="view.php">List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>