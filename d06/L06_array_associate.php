<!DOCTYPE html>
<!-- mang ket hop -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array associate</title>
    <link rel="stylesheet" href="..\lib\css\bootstrap.min.css">

</head>

<body>
    <div class="container">
        <h3>Danh sach mang co key value</h3>
        <?php
        fnArrayStudent();

        function fnArrayStudent(){
            //tao mang ket hop [$ds] chua danh sach sinh vien co ma so & ten cua sinh vien
            $ds = [
                "S01"=>"Nguyen Ngoc Thach",
                "S02"=>"Quach Gia Lam",
                "S03"=>"Nguyen Toan Thang",
                "S04"=>"Dao Cong Duong",
                "S05"=>"Bui Quoc Tuan"
            ];

            echo "<h3>Danh sach sinh vien</h3>";
            echo "<table class='table table-hover table-stripped'>";
            echo "<thead><tr><th>ID</th><th>Student name</th></tr></thead>";
            echo "<tbody>";
            foreach($ds as $ms=>$tenSV){
                echo "<tr>";
                echo "<td>$ms</td><td>$tenSV</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        ?>
        
            
        
    </div>

</body>

</html>