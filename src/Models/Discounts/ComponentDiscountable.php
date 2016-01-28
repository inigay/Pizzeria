<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 1:49 AM
 */

namespace Pizzeria\Models\Discounts;

use Pizzeria\Models\Components\ComponentBase;


interface ComponentDiscountable
{
    public function discount($price);
}