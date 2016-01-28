<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:33 PM
 */

namespace Pizzeria\Models;


class PriceCalculator
{
    private $discountModel;

    public function getTotal(Order $order)
    {
        return $order->getTotal($this->discountModel);
    }
}