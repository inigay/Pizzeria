<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:43 PM
 */

namespace Pizzeria\Models\Base;

use Pizzeria\Models\Base\Base;

class ThickCrust extends Base
{
    public function __construct()
    {
        $this->name = "thick";
        $this->type = "crust";
        $this->price = 1.25;
    }


    public function addToPrice($price)
    {
        return $price + $this->price;
    }
}