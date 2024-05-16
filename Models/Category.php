<?php
require_once __DIR__ . '/Products.php';
class Category extends Products{
        public $name;
        public  $img;
    
        public function __construct($_name, $_img) {
            $this->name = $_name;
            $this->img = $_img;
        }
    
}
?>