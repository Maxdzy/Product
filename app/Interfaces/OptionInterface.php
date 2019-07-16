<?php


namespace App\Interfaces;


/**
 * Interface OptionInterface
 * @package App\Interfaces
 */
interface OptionInterface
{
    public function getTable();
    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public function render();

    public function toArray();
}