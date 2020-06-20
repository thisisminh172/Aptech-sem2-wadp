<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Merge php</title>
    <link rel="stylesheet" href="..\lib\css\bootstrap.min.css">

</head>

<body>

    <div class="container">
        <h3>Array merge</h3>
        <hr>
        <?php
             fnArrayMerge();

             function fnArrayMerge()
             {
              //tao mot mang [$ds1] chua danh sach sinh vien thi mon c
              $ds1 = [
               "S01" => "Nguyen Ngoc Thach",
               "S02" => "Quach Gia Lam",
               "S03" => "Nguyen Toan Thang",
               "S04" => "Dao Cong Duong",
               "S05" => "Bui Quoc Tuan"
              ];

              //tao mot mang [$ds2] chua danh sach sinh vien thi mon java
              $ds2 = [
               "S01" => "Nguyen Ngoc Thach",
               "S06" => "Le Minh",
               "S04" => "Dao Cong Duong",
               "S10" => "Dao Xuan Huy",
               "S08" => "Vo Duc Chinh",
               "S07" => "Nguyen Van Long",
               "S09" => "Hoang Giang Chuan",
               "S11" => "Luu Hoang Hai"
              ];
              echo "<h3>Danh sach thi mon c</h3>";
              echo "<ol>";
              foreach ($ds1 as $ms => $ten) {
               printf("<li>%s , %s</li>", $ms, $ten);
              }
              echo "</ol>";
              echo "<br><br>";

              echo "<h3>Danh sach thi mon java</h3>";
              echo "<ol>";
              foreach ($ds2 as $ms => $ten) {
               printf("<li>%s , %s</li>", $ms, $ten);
              }
              echo "</ol>";
              echo "<br><br>";

              //tao mang [$ds] chua tat ca danh sach cac sinh vien
              $ds = array_merge($ds1, $ds2);
              echo "<h3>Danh sach sinh vien sau khi merge</h3>";
              echo "<ol>";
              foreach ($ds as $ms => $ten) {
               printf("<li>%s , %s</li>", $ms, $ten);
              }
              echo "</ol>";
              echo "<br><br>";

              //sap xep lai mang danh sach va in ra
              arsort($ds);
              echo "<h3>Danh sach sinh vien sau khi sort theo thu tu tu z-a</h3>";
              echo "<pre>";
              print_r($ds);
              echo "</pre>";

              //in danh sach sinh vien thi ca 2 mon
              $ds4 = array_intersect($ds1, $ds2);
              echo "<h3>Danh sach sinh vien thi 2 mon</h3>";
              echo "<pre>";
              print_r($ds4);
              echo "</pre>";
             }

            ?>
    </div>
</body>

</html>