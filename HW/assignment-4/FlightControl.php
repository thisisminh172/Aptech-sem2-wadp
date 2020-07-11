<?php
session_start();

if ($_SESSION['is_login'] !== 1) {
    header('location: login.php');
    exit();
}
include_once '../../lib/lib.inc';

function getFlightList() {

    $link = getConnect();
    //global $link;//khong can
    $sql = "SELECT * FROM `tbFlights`";
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>{$row[0]}</td>";
            echo "<td>{$row[2]}</td>";
            echo "<td>{$row[3]}</td>";
            echo "<td>{$row[4]}</td>";
            echo "<td><a href='detailFlight.php?code={$row[0]}'>detail</a> | <a href='editFlight.php?code={$row[0]}'>edit</a> | <a href='delete.php?code={$row[0]}'  onclick='return confirmMessage()'>delete</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<p>There is no data in the system</p>";
    }
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Flight control</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <style>
            .font-zie-30 {
                font-size: 30px;
                text-decoration: underline;
            }
        </style>
        <div class="container">
            <h3>List of Flights</h3>
            <a href="addFlight.php" class="font-zie-30 text-danger">Add New Flight</a><br>
            <a href="view.php">List</a>
            <a href="logout.php" class="float-right">Sign-out</a>
            <br>
            <hr>

            <div class="row">
                <table class="table table-bordered table-striped table-hover text-center">
                    <thead>
                        <tr>
                            <th>AircraftCode</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>DepTime</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <a href=""></a>
                    <?php
                    getFlightList();
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </body>
    <script>
        function confirmMessage() {
            return confirm("Are you sure to cancel this Flightttt");
        }
    </script>
</html>