<?php


namespace App\Interfaces;


/**
 * Interface ProductInterface
 * @package App\Interfaces
 */
interface ProductInterface
{
    /**
     * ProductInterface constructor.
     * @param $id
     * @param $SKU
     * @param $name
     * @param $price
     * @param $type_id
     * @param null $option
     */
    public function __construct($id, $SKU, $name, $price, $type_id, $option = null);

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public static function typeData();

    /**
     * @return mixed
     */
    public function render();
}