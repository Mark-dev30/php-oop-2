<?php
class Accessory extends Product
{
    public $material;
    public $size;

    public function __construct($image, $title, $price, $category, $_material, $_size)
    {
        parent::__construct($image, $title, $price, $category);
        $this->material = $_material;
        $this->size = $_size;
    }
}
