<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


/**
 * Class Size
 * @package App\Options
 */
class Size implements OptionInterface
{
    private $size;

    /**
     * Size constructor.
     * @param $size
     */
    public function __construct($size)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return array|mixed
     */
    public function get()
    {
        return [
            'size' => $this->size,
        ];
    }

    /**
     * @return mixed|string
     */
    public function render()
    {
        return "Size: {$this->size} Mb";
    }
}