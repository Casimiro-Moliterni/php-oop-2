<?php
require_once __DIR__ . '/Products.php';
class Kennel_pet extends Products{

     public $size;
public function __construct($_name, $_price, $_category){
    parent::__construct($_name, $_price, $_category);
}
}

?>