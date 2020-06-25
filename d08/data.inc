<?php
class Product{
    public $id,$name,$price,$image,$quantity;

    //ham dung
    public function __construct($ms,$ten,$gia,$hinh,$soluong){
        $this->id = $ms;
        $this->name = $ten;
        $this->price = $gia;
        $this->image = $hinh;
        $this->quantity = $soluong;
    }
}

$ds = [
    new Product(1,"Pizza hoang de",12000,"image1.jpg",1),
    new Product(2,"Pizza hoang hau",23000,"image2.jpg",1),
    new Product(3,"Pizza hai san",40000,"image3.jpg",1),
    new Product(4,"Pizza pho mai",156000,"image4.jpg",1),
    new Product(5,"Pizza tom hum",10000,"image5.jpg",1),
    new Product(6,"Pizza nam",66000,"image6.jpg",1),
    new Product(7,"Pizza Italy",88000,"image7.jpg",1),
    new Product(8,"Pizza khoai tay",92000,"image8.jpg",1),
    new Product(9,"Pizza thap cam",15000,"image9.jpg",1)
];

function search($maSP){
    global $ds;
    foreach($ds as $item){
        if($item->id == $maSP){
            return $item;
        }
    }//ket thuc
    //khong tim duoc san pham trong danh sach
    return FALSE;

}
