<?php
require_once __DIR__ . '/Products.php';
class Game_pet extends Products{

    public function __construct($_name, $_price, $_category){
        parent::__construct($_name,$_price,$_category);
    }
}
?>