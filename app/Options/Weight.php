<?php


namespace App\Options;


class weight implements OptionInterface
{
    private $weight;

    public function __construct($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function get()
    {
        return [
            'width' => $this->weight,
        ];
    }

    public function render(){
      echo $this->weight. " class <br>";
    }
}