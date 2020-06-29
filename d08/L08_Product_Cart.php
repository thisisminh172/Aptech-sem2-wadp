<?php
if(empty($_GET['id'])){
    header('location: L08_Product.php');
    exit();
}
include_once './data.inc';
session_start();

$id = $_GET['id'];
if(isset($_SESSION['cart'][$id])){
    //sp chon mua da co trong gio hang
    //tang luong mua len 1 don vi
    $_SESSION['cart'][$id]->quantity++;
}else{
    //sp chua co trong gio hang
    $spNew = search($id);
    $_SESSION['cart'][$id]=$spNew;
}
header('location: L08_Product_Cart_View.php');
//echo "<pre>";
//print_r($_SESSION['cart']);
/* 
 * dua san pham dat mua tu trang [L08_product] vo gio hang
 * - neu sp chon mua chua co trong gio hang -> tao ra 1 san pham moi trong gio hang
 * - nguoc lai tang so luong dat mua len 1 don vi
 */

?>