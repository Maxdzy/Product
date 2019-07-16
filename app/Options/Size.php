<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


class Size implements OptionInterface
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;
        return $this;
    }

    public function get()
    {
        return [
            'size' => $this->size,
        ];
    }

    public function render()
    {
        return "Size: {$this->size} Mb";
    }
}