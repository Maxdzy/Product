<?php


namespace App\Interfaces;


interface ProductInterface
{
    public function __construct($id, $SKU, $name, $price, $type_id, $option = null);

    public function getId();

    public function get();

    public static function typeData();

    public function render();
}