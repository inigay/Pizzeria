<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 8:38 PM
 */

namespace Pizzeria\Models;

use Pizzeria\Models\Base\Base;
use Pizzeria\Models\Components\Base as ComponentBase;

class Order implements Calculatable
{
    private $base;
    private $toppings;
    private $cheeseCollection;


    public function __construct(Base $base, Array $components = array())
    {
        $this->toppings = new \SplObjectStorage();
        $this->cheeseCollection = new \SplObjectStorage();
        $this->base = $base;
        if(count($components) > 0)
        {
            foreach($components as $component)
            {
                $this->addComponent($component);
            }
        }
    }

    public function addComponent(ComponentBase $component)
    {
        if($component->getType() == "cheese")
            $this->cheeseCollection->attach($component);
        else
            $this->toppings->attach($component);
    }

    public function getTotal(DiscountModel $discount)
    {
        $total = $this->base->addToPrice(0);

        foreach($this->toppings as $topping)
        {
            $total += $discount->addToPrice($topping);
        }

        foreach($this->cheeseCollection as $cheese)
        {
            $total += $discount->addToPrice($cheese);
        }

        return $total;
    }


}