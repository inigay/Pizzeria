<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:47 PM
 */

namespace Pizzeria\Models\Components;


class ThinCrust extends Base
{
    public function __construct()
    {
        $this->name = "thin";
        $this->type = "crust";
        $this->price = 1;
    }

}