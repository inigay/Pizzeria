<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 9:20 PM
 */

namespace Pizzeria\Models\Components;


class Pepper extends Base
{
    public function __construct($factor = 1)
    {
        $this->factor = $factor;
        $this->name = "pepper";
        $this->type = "topping";
        $this->price = 0.2;
    }
}