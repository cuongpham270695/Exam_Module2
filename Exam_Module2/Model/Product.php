<?php


namespace App\Model;


class Product
{
    public $name;
    public $productLine;
    public $price;
    public $quantity;
    public $description;
    public $id;

    public function __construct($name,$productLine,$price,$quantity,$description)
    {
        $this->name = $name;
        $this->productLine = $productLine;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
    }

}