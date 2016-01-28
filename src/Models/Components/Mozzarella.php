<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:22 PM
 */

namespace Pizzeria\Models\Components;


class Mozzarella extends ComponentBase
{

    public function __construct($factor = 1)
    {
        parent::__construct($factor);
        $this->name = "mozzarella";
        $this->type = "cheese";
        $this->price = 2;
    }
}