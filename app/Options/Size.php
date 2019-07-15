<?php


namespace App\Options;


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
        echo "<p>Size: {$this->size} Mb</p>";
    }
}