<?php


namespace App\Options;


class Size implements OptionInterface
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
        return $this;
    }

    public function get()
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
        ];
    }

    public function render(){
      echo $this->width." ".$this->height." class <br>";
    }
}