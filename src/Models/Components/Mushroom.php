<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 9:39 PM
 */

namespace Pizzeria\Models\Components;


class Mushroom extends Base
{
    public function __construct($factor = 1)
    {
        $this->factor = $factor;
        $this->name = "mushroom";
        $this->type = "topping";
        $this->price = 0.6;
    }
}