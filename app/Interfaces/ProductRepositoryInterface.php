<?php

namespace App\Interfaces;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function __construct($mysql);

    public function save(Product $product);

    public function getAll();

    public function findById(Product $productId);
}