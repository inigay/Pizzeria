<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 3:51 AM
 */

namespace Pizzeria\Models\Discounts;


class TotalFee implements ComponentDiscountable
{

    public function discount($price)
    {
        return $price + number_format(($price / 4.00), 2);
    }
}