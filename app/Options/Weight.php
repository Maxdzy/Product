<?php


namespace App\Options;

use App\Interfaces\OptionInterface;


/**
 * Class Weight
 * @package App\Options
 */
class Weight implements OptionInterface
{
    private $weight;

    /**
     * Weight constructor.
     * @param $weight
     */
    public function __construct($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return array|mixed
     */
    public function get()
    {
        return [
            'width' => $this->weight,
        ];
    }

    /**
     * @return mixed|string
     */
    public function render(){
      return "Weight {$this->weight} Kg";
    }
}