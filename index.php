<?php

require_once './vendor/autoload.php';

use App\Models\DB_config;
use App\Models\Product;
use App\Options\Size;
use App\Options\Dimension;
use App\Options\Weight;

$result = [];
$arrayObject = [];

$mysql = new DB_config();
$all = $mysql->pdo->query('SELECT * from products');

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
            $result[$key]["option"] = array("size" => $product["size"]);
            $option = new Size($product["size"]);
            break;
        case 1:
            $result[$key]["option"] = array(
                "height" => $product["height"],
                "width" => $product["width"],
                "length" => $product["length"]
            );
            $option = new Dimension($product["width"], $product["height"], $product["length"]);
            break;
        case 2:
            $result[$key]["option"] = array("weight", $product["weight"]);
            $option = new Weight($product["weight"]);
            break;
    }
    $arrayObject[$key] = new Product();
    $arrayObject[$key]->set($product["id"], $product["SKU"], $product["name"], $product["price"], $option);
    $arrayObject[$key]=$product;

}

var_dump($arrayObject);

$result_json = json_encode($result);

require_once('./view/list.php');

