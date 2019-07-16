<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


class Dimension implements OptionInterface
{
    private $width;
    private $height;
    private $length;

    public function __construct($width, $height, $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        return $this;
    }

    public function get()
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
            'length' => $this->height,
        ];
    }

    public function render()
    {
        return "Dimension: {$this->width} x {$this->height} x {$this->height}";
    }
}