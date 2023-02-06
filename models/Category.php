<?php
class Category
{
    public $typology;
    public $animal;

    public function __construct($_typology)
    {
        $this->typology = $_typology;
    }

    public function setTypology($typology)
    {
        if ($typology == 'Dog') {
            $this->animal .= '<i class="fa-solid fa-dog"></i>';
        } elseif ($typology == 'Cat') {
            $this->animal = '<i class="fa-solid fa-cat"></i>';
        } elseif ($typology == 'Bird') {
            $this->animal = '<i class="fa-solid fa-dove"></i>';
        } else {
            $this->animal = '<i class="fa-solid fa-fish-fins"></i>';
        }
        return $this->animal;
    }
}
