<?php
class Product
{
    public $image;
    public $title;
    public $price;
    public $category;


    public function __construct($_image, $_title, $_price, Category $_category)
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }
}
