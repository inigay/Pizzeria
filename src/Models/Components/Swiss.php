<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:24 PM
 */

namespace Pizzeria\Models\Components;


class Swiss extends ComponentBase
{

    public function __construct($factor = 1)
    {
        parent::__construct($factor);
        $this->name = "swiss";
        $this->type = "cheese";
        $this->price = 4;
    }
}