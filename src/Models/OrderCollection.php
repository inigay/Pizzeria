<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 4:29 AM
 */

namespace Pizzeria\Models;


class OrderCollection
{
    private $base;
    private $components;
    private $cheeseCollection;

    public function addBase($base)
    {
        $this->base = $base;
    }

    public function addComponent($component)
    {
        $this->components[] = $component;
    }

    public function addCheese($cheese)
    {
        $this->cheeseCollection[] = $cheese;
    }

    public function getBase(){
        return $this->base;
    }

    public function getComponents()
    {
        return $this->components;
    }

    public function getCheeseCollection()
    {
        return $this->cheeseCollection;
    }
}