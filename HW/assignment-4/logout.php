<?php
session_start();
if (isset($_SESSION['is_login'])) {
    unset($_SESSION['is_login']);
    session_destroy($_SESSION['is_login']);
    header('location: view.php');
}


