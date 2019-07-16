<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


/**
 * Class Dimension
 * @package App\Options
 */
class Dimension implements OptionInterface
{

    private $width;
    private $height;
    private $length;

    /**
     * Dimension constructor.
     * @param $width
     * @param $height
     * @param $length
     */
    public function __construct($width, $height, $length)
    {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
        return $this;
    }

    /**
     * @return array|mixed
     */
    public function get()
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
            'length' => $this->height,
        ];
    }

    /**
     * @return mixed|string
     */
    public function render()
    {
        return "Dimension: {$this->width} x {$this->height} x {$this->height}";
    }
}