<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:23 PM
 */

namespace Pizzeria\Models\Components;


class American extends Base
{

    public function __construct($factor = 1)
    {
        $this->factor = $factor;
        $this->name = "american";
        $this->type = "cheese";
        $this->price = 3;
    }
}