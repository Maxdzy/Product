<?php

namespace App\Models;

class Product
{
    public $option;
    public $pdo;

    public function __construct($pdo, $option)
    {
        $this->pdo = $pdo;
        $this->option = $option;
    }

    public function show()
    {
        $result = "";
        $html_products = "";
        foreach ($this->pdo->query('SELECT * from products') as $key => $product) {
            $html_products .= "
        <div class='col-3 card product'>
          <div class='card-body'>
            <p>{$product["SKU"]}</p>
            <p>{$product["name"]}</p>
            <p>{$product["price"]}</p>";
            switch ($product["type_id"]) {
                case 0:
                    $html_products .= "<p>Size: {$product["size"]} Mb</p>";
                    break;

                case 1:
                    $html_products .= "<p>Dimension: {$product["height"]}x{$product["width"]}x{$product["length"]}</p>";
                    break;

                case 2:
                    $html_products .= "<p>Weight: {$product["weight"]} KG</p>";
                    break;
            }

            $html_products .= "
           </div>
        </div>";
        }

        $result = $html_products;
        return $result;
    }

}