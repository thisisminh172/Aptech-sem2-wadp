<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link rel="stylesheet" href="..\lib\css\bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>indexed array</h2>
        <hr>
        <?php
         fnArray1();

         fnArray2();

         fnArrayMerge();
         function fnArray1()
         {
          //tao index mang san pham bang ham array
          $sanpham = array("laptop", "mouse", "monitor", "desktop");

          //in danh sach san pham ra
          echo "<h3>Danh sach san pham</h3>";
          echo "<ol>";
          for ($i = 0; $i < count($sanpham); $i++) {
           echo "<li>{$sanpham[$i]}</li>";
          }
          echo "</ol>";
         }

         function fnArray2()
         {
          //tao 1 index array [$thuonghieu] bang khai bao identifier
          $thuonghieu = ["IBM", "Microsoft", "HP", "Dell", "Sony"];

          //in danh sach cac thuong hieu
          echo "<h3>Danh sach cac thuong hieu</h3>";
          echo "<ul>";
          foreach ($thuonghieu as $th) {
           printf("<li>%s</li>", $th);
          }
          echo "</ul>";
         }

         function fnArrayMerge(){
          $sanpham = array("laptop", "mouse", "monitor", "desktop");
          $thuonghieu = ["IBM", "Microsoft", "HP", "Dell", "Sony","HP"];
            $ds = array_merge($sanpham,$thuonghieu);
            echo "<pre>";
            print_r($ds);
            echo "</pre>";
         }

        ?>
    </div>
</body>
</html>