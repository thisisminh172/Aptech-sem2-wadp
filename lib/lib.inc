<?php

function getConnect() {
    /*
      test ket noi den csdl 1910.M1 cua MySQL
     */
    define('DB_HOST', 'localhost:3308');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', '1910.M1');

    $cn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$cn) {
        echo "<h3>ket noi that bai</h3>";
    }
    return $cn;
}

?>