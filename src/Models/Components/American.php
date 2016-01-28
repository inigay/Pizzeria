<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:23 PM
 */

namespace Pizzeria\Models\Components;

use Pizzeria\Models\Describable;

class American extends ComponentBase
{

    public function __construct($factor = 1)
    {
        parent::__construct($factor);
        $this->name = "american";
        $this->type = "cheese";
        $this->price = 3;
    }

}