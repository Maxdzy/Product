<?php


namespace App\Interfaces;


/**
 * Interface OptionInterface
 * @package App\Interfaces
 */
interface OptionInterface
{
    /**
     * @return mixed
     */
    public function get();

    /**
     * @return mixed
     */
    public function render();
}