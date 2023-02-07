<?php
class Game extends Product
{
    public $characteristics;
    public $size;

    public function __construct($image, $title, $price, $category, $_characteristics, $_size)
    {
        parent::__construct($image, $title, $price, $category);
        $this->characteristics = $_characteristics;
        $this->size = $_size;
    }
}
