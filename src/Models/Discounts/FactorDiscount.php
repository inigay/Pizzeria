<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 1:50 AM
 */

namespace Pizzeria\Models\Discounts;


use Pizzeria\Models\Components\ComponentBase;

class FactorDiscount implements ComponentDiscountable
{
    public function discount($price)
    {
        return $price - number_format($price / 5.00, 2);
    }
}