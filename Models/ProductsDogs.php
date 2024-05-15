<?php
require_once __DIR__ . '/Products.php';
class ProductDog extends Products{

    public function __construct($_name,$_price,$_discount,$_category,$_image){
     parent::__construct($_name,$_price,$_discount,$_category,$_image);

     
    }
}

?>