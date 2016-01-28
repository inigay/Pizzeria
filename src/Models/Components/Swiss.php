<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:24 PM
 */

namespace Pizzeria\Models\Components;


class Swiss extends Base
{

    public function __construct($factor = 1)
    {
        $this->factor = $factor;
        $this->name = "swiss";
        $this->type = "cheese";
        $this->price = 4;
    }
}