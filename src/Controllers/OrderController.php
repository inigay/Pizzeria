<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 7:01 PM
 */

namespace Pizzeria\Controllers;

use Pizzeria\Factory\OrderCollectionFactory;
use Pizzeria\Models\Components\Olive;
use Pizzeria\Models\Components\Swiss;
use Pizzeria\Models\Components\ThinCrust;
use Pizzeria\Models\Descriptor;
use Pizzeria\Models\PriceCalculator;

class OrderController
{
    private $validator;

    public function __construct()
    {

    }

    public function calculatePrice($str)
    {

       $order = OrderCollectionFactory::createOrder($str);
        $desc = new Descriptor();
        $desc->addBase($order->getBase());
        $desc->addComponents($order->getComponents());
        $desc->addCheese($order->getCheeseCollection());
        
        $result = "Your Order is: " . $desc->describe();

        $priceCalc = new PriceCalculator($order->getBase());
        foreach($order->getComponents() as $comp)
        {
            $priceCalc->addComponent($comp);
        }

        foreach($order->getCheeseCollection() as $cheese)
        {
            $priceCalc->addComponent($cheese);
        }

        $result .= "\n Total is: " . $priceCalc->getTotalPrice();
        return $result;

    }
}