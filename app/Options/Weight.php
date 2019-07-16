<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


class Weight implements OptionInterface
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
      return "Weight {$this->weight} Kg";
    }
}