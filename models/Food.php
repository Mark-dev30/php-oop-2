<?php
class Food extends Product
{
    public $weight;
    public $ingredient;

    public function __construct($image, $title, $price, $category, $_weight, $_ingredient)
    {
        parent::__construct($image, $title, $price, $category);
        $this->weight = $_weight;
        $this->ingredient = $_ingredient;
    }
}
