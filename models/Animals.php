<?php
class Animals
{
    public $dogs;
    public $cats;
    public $birds;
    public $fish;


    public function __construct(Dogs $_dogs, Cats $_cats, Birds $_birds, Fish $_fish)
    {
        $this->dogs = $_dogs;
        $this->cats = $_cats;
        $this->birds = $_birds;
        $this->fish = $_fish;
    }
}
