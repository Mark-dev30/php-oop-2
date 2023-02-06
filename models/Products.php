<?php
class Products
{
    public $image;
    public $title;
    public $price;
    public $category;
    public $type;


    public function __construct($_image, $_title, $_price, Category $_category, Type $_type)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;
    }
}
