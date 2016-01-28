<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:55 PM
 */

namespace Pizzeria\Models\Components;


abstract class Base
{
    protected $name;
    protected $type;
    protected $factor;
    protected $price;

    abstract public function __construct($factor);

    public function addToPrice($price)
    {
        return $price + $this->price * $this->factor;
    }

    public function getType()
    {
        return $this->type;
    }

}