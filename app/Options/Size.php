<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


/**
 * Class Size
 * @package App\Options
 */
class Size extends AbstractProperty implements OptionInterface
{
    protected $table = 'size';

    private $size;

    /**
     * Size constructor.
     * @param $size
     */
    public function __construct($size = null)
    {
        $this->set($size);
        return $this;
    }

    public function set($size)
    {
        $this->size = $size;
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