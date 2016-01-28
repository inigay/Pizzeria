<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:41 PM
 */

namespace Pizzeria\Models\Base;


abstract class Base
{
    protected $name;
    protected $type;
    protected $price;

    abstract public function addToPrice($price);

}