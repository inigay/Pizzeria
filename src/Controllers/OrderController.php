<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 7:01 PM
 */

namespace Pizzeria\Controllers;

use Pizzeria\Models\Components\Olive;
use Pizzeria\Models\Components\Swiss;
use Pizzeria\Models\Components\ThinCrust;
use Pizzeria\Models\PriceCalculator;

class OrderController
{
    private $validator;

    public function __construct()
    {

    }

    public function calculatePrice($str)
    {

        $calc = new PriceCalculator(new ThinCrust());
        $calc->addComponent(new Olive(2));
        $calc->addComponent(new Swiss());

        $calc->getTotalPrice();

    }
}