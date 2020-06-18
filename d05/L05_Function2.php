<!DOCTYPE html>
<!--
demo user-defined function with parameter
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <link rel="stylesheet" href="../lib/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h2>Function PHP with parameter</h2>
        <hr>
        <?php
            $n = 8;
            //tinh va in ra giai thua cua $n
            $r = fnFac($n);
            echo "{$n}! =" . $r . "<br>";

            //tinh giai thua theo dia chi tham chieu
            //fnFac2($n);
            echo "{$n}! =" . fnFac2($n) . $n . "<br>";

            //tinh va in giai thua theo ham so default
            $n = 8;
            $kq = fnFac3($n);
            echo "(3). $n! = ". $kq . "<br>";

            $kq = fnFac3();
            echo "(4). $n! = ". $kq . "<br>";

        ?>


        <?php
         //ham tinh giai thua so nguyen n
         //ham co 1 doi so $n
         function fnFac($n)
         {
          $kq = 1;
          for ($i = 1; $i <= $n; $i++) {
           $kq *= $i;
          }
          return $kq;
         }

         #Ham tinh giai thua cua 1 so nguyen n - version 2
         #ham co 1 doi so $n (reference)
         function fnFac2(&$n)
         {
          $kq = 1;
          for ($i = 1; $i <= $n; $i++) {
           $kq *= $i;
          }
          $n = $kq;
         }

         #Ham tinh giai thua cua 1 so nguyen n - version 3
         #ham co 1 doi so $n (default = 5)
         function fnFac3($n=5)
         {
          $kq = 1;
          for ($i = 1; $i <= $n; $i++) {
           $kq *= $i;
          }
          return $kq;
         }

        ?>
    </div>
</body>
</html>