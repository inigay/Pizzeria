<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 12:58 AM
 */

namespace Pizzeria\Models;


use Pizzeria\Models\Components\Base;
use Pizzeria\Models\Components\ComponentBase;
use Pizzeria\Models\Discounts\FactorDiscount;
use Pizzeria\Models\Discounts\TotalFee;

class PriceCalculator
{
    private $base;
    private $components;

    public function __construct(Base &$base)
    {
        $this->base = $base;
        $this->components = new \SplObjectStorage();
    }

    public function addComponent(ComponentBase $component)
    {
        $this->components->attach($component);
    }

    public function addBase(Base $base)
    {
        $this->base = $base;
    }

    public function getTotalPrice()
    {
        $total = $this->base->getPrice();

        $componentDiscount = new FactorDiscount();
        $extraFeeCount = 0;

        foreach($this->components as $component)
        {
            $component->getFactor() > 1 ?
                ($total += $componentDiscount->discount($component->getPrice())) : ($total += $component->getPrice());

            if($component->getName() == "swiss" || $component->getName() == "olive")
                $extraFeeCount++;
        }

        if($extraFeeCount > 1){
            $totalDiscount = new TotalFee();
            $total = $totalDiscount->discount($total);
        }

        return $total;
    }



}