<?php

namespace App\Interfaces;

/**
 * Interface ActionRepositoryInterface
 * @package App\Interfaces
 */
interface ActionRepositoryInterface
{
    /**
     * ActionRepositoryInterface constructor.
     * @param $mysql
     */
    public function __construct($mysql);

    /**
     * @param $data
     * @return mixed
     */
    public function add($data);

    /**
     * @param $arrayProductId
     * @return mixed
     */
    public function delete($arrayProductId);

}