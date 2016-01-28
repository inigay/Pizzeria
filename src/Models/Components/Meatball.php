<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:20 PM
 */

namespace Pizzeria\Models\Components;


class Meatball extends Base
{

    public function __construct($factor = 1)
    {
        $this->factor = $factor;
        $this->name = "meatball";
        $this->type = "topping";
        $this->price = 0.8;
    }
}