<?php
class Food extends Product
{
    public $title_1;
    public $title_2;

    public function __construct($image, $title, $price, $category, $_title_1, $_title_2)
    {
        parent::__construct($image, $title, $price, $category);
        $this->title_1 = $_title_1;
        $this->title_2 = $_title_2;
    }
}
