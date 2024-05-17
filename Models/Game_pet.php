<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../Traits/Made_in.php';

class Game_pet extends Products{
  use Made_in;
    public function __construct($_name, $_price, $_category){
        parent::__construct($_name,$_price,$_category);
    }
}
?>