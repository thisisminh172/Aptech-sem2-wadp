<?php
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
            echo "<td>{$row[1]}</td>";
            echo "<td>{$row[2]}</td>";
            echo "<td>{$row[3]}</td>";
            echo "<td>{$row[4]}</td>";
            echo "<td>{$row[5]}</td>";

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
        <title>List of Flights</title>
        <link href="../../lib/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container">
            <h3>List of Flights</h3>

            <a href="login.php" class="float-right">Sign-in</a>
            <br>
            <hr>

            <div class="row">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>AircraftCode</th>
                            <th>FType</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <th>DepTime</th>
                            <th>Hours</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        getFlightList();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
