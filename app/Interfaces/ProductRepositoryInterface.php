<?php

namespace App\Interfaces;

use App\Models\Product;

/**
 * Interface ProductRepositoryInterface
 * @package App\Interfaces
 */
interface ProductRepositoryInterface
{
    /**
     * ProductRepositoryInterface constructor.
     * @param $mysql
     */
    public function __construct($mysql);

    /**
     * @param Product $product
     * @return mixed
     */
    public function save(Product $product);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param Product $productId
     * @return mixed
     */
    public function findById(Product $productId);
}