<?php


namespace App\Options;


use App\Interfaces\OptionInterface;

abstract class AbstractProperty implements OptionInterface
{
    protected $table;
    public function getTable(){
        return $this->table;
    }

    public function get()
    {
        $sql = 1;
    }

    public function save ()
    {
        //insert to $this->getTable ($this->toArray())
    }

    public function toArray()
    {
        return (array) $this;
    }

}