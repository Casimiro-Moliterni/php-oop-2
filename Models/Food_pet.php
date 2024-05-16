<?php
require_once __DIR__ . '/Products.php';
class Food_pet extends Products{
   public $weight;
   public $ingredients;


   public function __construct($_name, $_price, $_category, Array $_ingredients){
    parent::__construct($_name, $_price, $_category);
    $this->ingredients= $_ingredients;
   }
    
}
?>