<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 9:05 PM
 */

namespace Pizzeria\Models\Components;


class Tomato extends ComponentBase
{
    public function __construct($factor = 1)
    {
        parent::__construct($factor);
        $this->name = "tomato";
        $this->price = 0.25;
        $this->type = "sauce";
    }
}