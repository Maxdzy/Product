<?php


namespace App\Repository;


use App\Interfaces\OptionInterface;
use App\Models\Product;

class OptionsRepository
{
    protected $option;

    public function __construct(OptionInterface $option)
    {
        $this->option = $option;
    }

    public function get(Product $product)
    {
        $sql = ' FROM '.$this->option->getTable();

        $this->option->set($sql);
    }

}