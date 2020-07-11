<?php
// session_start();
// //echo print_r($_SESSION);
// //tạo t/g cho session->xóa
// if ($_SESSION['view'] + 60 * 30 < time()) {//if t/g+25 >t/g current->run
//     unset($_SESSION['view']);              //  (trong khoảng 25s đó nó true if lớn hơn 25s nó false)
// }
// //tạo event nhấn cho exit()
// function uncookie() {
//     unset($_SESSION['view']);
// }
// if (isset($_GET['exit'])) {
//     uncookie();
//     header("Location:login.php");
//     exit();
// }
// // Khi page ko có session->xóa
// if (empty($_SESSION['view'])) {
//     header("Location:login.php");
//     exit();
// }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../../js/jquery-3.4.1.min.js" type="text/javascript"></script>

        <style>
            input[type=text],[type=submit]{
                border: blue solid thin;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <b>Products List</b>
            <!--condition:logout for php link(return this.page to get $_GET['exit'] for check condition 2 )-->
            <!--tạo đường dẫn để lấy $_GET['exit'] bằng cách reload lại trang thông qua link-->
            <a href="adminProduct.php?exit=true" style="float: right"><b>Exit</b></a>


            <hr>
            <form name="form" method="GET" enctype="multipart/form-data" class="form-group">
                Input Price
                from <input type="number" name="from" class="form-inline"> &nbsp;&nbsp;
                to <input type="number" name="to" class="form-inline"> &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="submit"  value = "search" class="btn btn-toolbar btn-info form-inline">
            </form>


            <table class="table table-bordered table-hover table-striped ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>product name</th>
                        <th>unit price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                <?php
                //Xu ly van de submit để bảng biến đổi các dòng  
                if (isset($_GET['submit']) == TRUE) {
                    fromTo();
                    //exit();
                } else if (isset($_GET['submit']) == FALSE) {
                    getall();
                    //exit();
                }
                ?>
                </tbody>
            </table>
            <script>
                    function yes() {
                        return confirm("Are you sure ?");
                    }
                </script>

        </div>

        <?php

        function getall() {
            include_once '../../lib/lib.inc';
            $link = getConnect();
            $sqli = "select * from tbflights";
            // thuc hien linh truy van
            $result = mysqli_query($link, $sqli);
            if ($result == false) {
                die("don't have result !!!");
            }
            // duyet cac dong du lieu trong ($result) de xuat ra man hinh(MYSQLI_BOTH->default so,chuoi)
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

                echo(
                "<tr>"
                . "<td>$row[0]</td>"
                . "<td>$row[1]</td>"
                . "<td>$row[2]</td>"
                . "<td>"
                . "<a href='edit?id=$row[0]'>Edit</a> |"
                . "<a href='#' onclick='return yes()'>Delete</a> "
                . "</td>"
                . "</tr>"
                );
            }
            mysqli_close($link);
        }

        function fromTo() {
            include_once '../../thuvien/as1.inc';
            $link = getConnect();
            //take data in from
            $from = mysqli_real_escape_string($link, $_GET['from']);
            $to = mysqli_real_escape_string($link, $_GET['to']);
            //if data input return = ""
            if ($from == "" || $to == "") {
                getall();
                exit(); //end && don't run down
            }
            if ($from > $to) {
                echo "<b style='color:red'>from must be larger than to !!!.<b>";
                exit();
            }
            //if data input have values
            $sqli = "select * from tbproducts where price between $from and $to;";


            // thuc hien linh truy van
            $result = mysqli_query($link, $sqli);
            if ($result == false) {
                die("Loi query !!!");
            }
            if (mysqli_num_rows($result) < 1) {
                echo "<b style='color:red'>The product you are looking for is not found !!!.</b>";
                exit();
            }


            // duyet cac dong du lieu trong ($result) de xuat ra man hinh(MYSQLI_BOTH->default so,chuoi)
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {

                echo(
                "<tr>"
                . "<td>$row[0]</td>"
                . "<td>$row[1]</td>"
                . "<td>$row[2]</td>"
                . "<td>"
                . "<a href='edit.php?id=$row[0]'>Edit</a> |"
                . "<a href='delete.php?id=$row[0]' onclick='return yes()'>Delete</a> "
                . "</td>"
                . "</tr>"
                );
            }
            mysqli_close($link);
        }
        ?>

    </body>

</html>
