<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 9:09 PM
 */

namespace Pizzeria\Models\Components;


class TomatoBasil extends Base
{
    public function __construct($factor = 1)
    {
        $this->factor = $factor;
        $this->name = "tomato-basil";
        $this->type = "sauce";
        $this->price = 0.5;
    }
}