<?php
 class Products{
    public $name;
    public $price;
    public $discount;

    public $description;
    public  $category;
    public $image;

    public function __construct($_name,$_price,$_category,){
        $this->name = $_name;
        $this->price = $_price;
        $this->category=$_category;
    }

 }
?>