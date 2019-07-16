<?php

namespace App\Repository;

use App\Interfaces\ActionRepositoryInterface;
use App\Models\Product;


class ActionProductRepository implements ActionRepositoryInterface
{
    private $mysql;

    public function __construct($mysql)
    {
        $this->mysql = $mysql;
    }

    public function add($data)
    {
        switch ($data["type_id"]) {
            case Product::TYPE_DVD_DISC:
                $sql = "INSERT INTO products (SKU, name, price, type_id, size) VALUES (:SKU, :name, :price, :type_id, :size)";
                break;

            case Product::TYPE_BOOK:
                $sql = "INSERT INTO products (SKU, name, price, type_id, weight) VALUES (:SKU, :name, :price, :type_id, :weight)";
                break;

            case Product::TYPE_FURNITURE:
                $sql = "INSERT INTO products (SKU, name, price, type_id, height, width, length) VALUES (:SKU, :name, :price, :type_id, :height, :width, :length)";
                break;
        }
        $pdo = $this->mysql->pdo->prepare($sql);
        $pdo->execute($data);
    }

    public function delete($arrayProductId)
    {

        $productId = implode(",", $arrayProductId);
        $sql = "DELETE FROM products WHERE id in ({$productId})";
        $pdo = $this->mysql->pdo->prepare($sql);
        $pdo->execute();

    }
}