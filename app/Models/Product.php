<?php

namespace App\Models;

use App\Interfaces\ProductInterface;

/**
 * Class Product
 * @package App\Models
 */
class Product implements ProductInterface
{

    const
        TYPE_DVD_DISC = 0,
        TYPE_BOOK = 1,
        TYPE_FURNITURE = 2;

    public $id;
    public $SKU;
    public $name;
    public $price;
    public $type_id;
    public $option;

    /**
     * Product constructor.
     * @param $id
     * @param $SKU
     * @param $name
     * @param $price
     * @param $type_id
     * @param null $option
     */
    public function __construct($id, $SKU, $name, $price, $type_id, $option = null)
    {
        $this->id = $id;
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->price = $type_id;
        $this->option = $option;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array|mixed
     */
    public function get()
    {
        return [
            "id" => $this->id,
            "SKU" => $this->SKU,
            "name" => $this->name,
            "price" => $this->price,
            "option" => array($this->option),
        ];
    }

    /**
     * @return array|mixed
     */
    public static function typeData()
    {
        return [
            self::TYPE_DVD_DISC => "​DVD-disc",
            self::TYPE_BOOK => "Book",
            self::TYPE_FURNITURE => "Furniture",
        ];
    }

    /**
     * @return mixed|string
     */
    public function render()
    {
        $result = "
        <div class='col-3 card product'>
            <div class='card-body'>
                <p>
                    <input type='checkbox' class='checkbox_del' name='delete_product[{$this->getId()}]' id='delete_{$this->getId()}'>
                    <label for='delete_{$this->getId()}'> delete {$this->getId()} </label>
                </p>
                <p>{$this->SKU}</p>
                <p>{$this->name}</p>
                <p>{$this->price}</p>
                <p>{$this->option}</p>
            </div>
        </div>
        ";
        return $result;
    }

}