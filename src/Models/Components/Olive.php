<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 9:21 PM
 */

namespace Pizzeria\Models\Components;


class Olive extends ComponentBase
{
    public function __construct($factor = 1)
    {
        parent::__construct($factor);
        $this->name = "olive";
        $this->type = "topping";
        $this->price = 0.4;
    }
}