<?php

namespace App\Models;

class Product
{
    public $id;
    public $SKU;
    public $name;
    public $price;
    public $option;

    public function set($id, $SKU, $name, $price, $option = null)
    {
        $this->id = $id;
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->option = $option;
    }

    public function get()
    {
        return [
            "id" => $this->id,
            "SKU" => $this->SKU,
            "name" => $this->name,
            "price" => $this->price,
            "option" => array($this->option),
        ];
    }

}