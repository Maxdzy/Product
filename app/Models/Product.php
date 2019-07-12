<?php


namespace App\Models;


use App\Options\OptionInterface;

class Product
{
    public $option;

    public function __construct($option)
    {
        $this->option = $option;
    }
}