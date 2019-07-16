<?php

namespace App\Repository;

use App\Interfaces\ActionRepositoryInterface;
use App\Models\Product;


/**
 * Class ActionProductRepository
 * @package App\Repository
 */
class ActionProductRepository implements ActionRepositoryInterface
{
    private $mysql;

    /**
     * ActionProductRepository constructor.
     * @param $mysql
     */
    public function __construct($mysql)
    {
        $this->mysql = $mysql;
        return $this;
    }

    /**
     * @param $data
     * @return mixed|void
     */
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

    /**
     * @param $arrayProductId
     * @return mixed|void
     */
    public function delete($arrayProductId)
    {

        $productId = implode(",", $arrayProductId);
        $sql = "DELETE FROM products WHERE id in ({$productId})";
        $pdo = $this->mysql->pdo->prepare($sql);
        $pdo->execute();

    }
}