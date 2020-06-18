<?php

/*
tao class
*/

class Product{
    public $id, $name, $price;
    //ham dung
    /*
    function __construct(){
        $this->id = "P1";
        $this->name = "coca cola";
        $this->price = 12000;
    }
    */

    function __construct($id,$name,$uprice){
        $this->id = $id;
        $this->name = $name;
        $this->price = $uprice;
    }

    function display(){
        echo "Product : <br>";
        echo "id = " . $this->id . "<br>";
        echo "name = " . $this->name . "<br>";
        echo "price = " . $this->price . "<br>";
    }
}

?>