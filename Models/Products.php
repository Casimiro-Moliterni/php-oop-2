<?php
 class Products{
    public $name;
    public $price;
    public $discount;
    public  $category;
    public $image;

    public function __construct($_name,$_price,$_discount,$_category,$_image){
        $this->name = $_name;
        $this->price = $_price;
        $this->discount = $_discount;
        $this->category=$_category;
        $this->image=$_image;
    }

 }
?>