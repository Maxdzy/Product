<?php

namespace App\Interfaces;

interface ActionRepositoryInterface
{
    public function __construct($mysql);

    public function add($data);

    public function delete($arrayProductId);

}