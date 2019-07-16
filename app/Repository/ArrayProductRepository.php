<?php

namespace App\Repository;


use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;
use App\Options\Dimension;
use App\Options\Size;
use App\Options\Weight;

class ArrayProductRepository implements ProductRepositoryInterface
{
    private $products = [];
    private $mysql;

    public function __construct($mysql)
    {
        $this->mysql = $mysql;
    }

    public function save(Product $product)
    {
        $this->products[(string)$product->getId()] = $product;
    }

    public function getAll()
    {
        $all = $this->mysql->pdo->query('SELECT * from products');

        foreach ($all as $key => $item) {

            switch ($item["type_id"]) {
                case Product::TYPE_DVD_DISC:
                    $option = new Size($item["size"]);
                    break;
                case Product::TYPE_BOOK:
                    $option = new Weight($item["weight"]);
                    break;
                case Product::TYPE_FURNITURE:
                    $option = new Dimension($item["width"], $item["height"], $item["length"]);
                    break;
                default:
                    $option = null;
            }
            $item_object = new Product($item["id"], $item["SKU"], $item["name"], $item["price"], $item["type_id"], $option->render());
            $this->save($item_object);

        }

        return $this->products;
    }

    public function findById(Product $productId)
    {
        $result = null;
        if (isset($this->products[(string)$productId])) {
            $result = $this->products[(string)$productId];
        }
        return $result;
    }
}