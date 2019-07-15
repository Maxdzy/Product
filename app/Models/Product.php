<?php

namespace App\Models;

class Product
{
    public $pdo;
    public $option;

    public function __construct($pdo, $option)
    {
        $this->pdo = $pdo;
        $this->option = $option;
    }

    public function showAll()
    {
        $result = [];
        $all = $this->pdo->query('SELECT * from products');
        foreach ($all as $key => $product) {

            $result[$key]["id"] = $product["id"];
            $result[$key]["SKU"] = $product["SKU"];
            $result[$key]["name"] = $product["name"];
            $result[$key]["price"] = $product["price"];
            $result[$key]["type"] = $product["type_id"];

            //$result[$key]["option"] = array($this->option->get());

            //todo edit switch, to class oprions
            switch ($product["type_id"]) {
                case 0:
                    $result[$key]["option"] = array("size"=>$product["size"]);
                    break;
                case 1:
                    $result[$key]["option"] = array(
                        "height" => $product["height"],
                        "width" => $product["width"],
                        "length" => $product["length"]
                    );
                    break;
                case 2:
                    $result[$key]["option"] = array("weight", $product["weight"]);
                    break;
            }
        }

        return json_encode($result);
    }

}