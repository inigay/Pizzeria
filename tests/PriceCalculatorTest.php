<?php

/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 3:45 AM
 */
class PriceCalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testPriceOfThinCrust2OlivesWithSwissCheese()
    {

        $calc = new \Pizzeria\Models\PriceCalculator(new \Pizzeria\Models\Components\ThinCrust());
        $calc->addComponent(new \Pizzeria\Models\Components\Olive(2));
        $calc->addComponent(new \Pizzeria\Models\Components\Swiss());
        $this->assertEquals(7.05, $calc->getTotalPrice());
    }
}
