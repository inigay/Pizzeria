<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:55 PM
 */

namespace Pizzeria\Models\Components;

use Pizzeria\Models\Describable;

abstract class Base implements Describable
{
    protected $name;
    protected $type;
    protected $price;


    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function describe()
    {
        return $this->name . " Crust";
    }
}