<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 9:17 PM
 */

namespace Pizzeria\Models\Components;


class TomatoGarlic extends ComponentBase
{
    public function __construct($factor = 1)
    {
        parent::__construct($factor);
        $this->name = "tomato-garlic";
        $this->type = "sauce";
        $this->price = 0.75;
    }
}