<?php


namespace App\Options;


interface OptionInterface
{
    public function get();

    public function render();
}