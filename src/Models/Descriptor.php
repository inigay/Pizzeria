<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 2:55 AM
 */

namespace Pizzeria\Models;


class Descriptor
{
    private $base;
    private $components;
    private $cheeseCollection;

    public function addBase($base)
    {
        $this->base = $base;
    }
    public function addComponents(&$components)
    {
        $this->components = $components;
    }

    public function addCheese(&$cheeseCollection)
    {
        $this->cheeseCollection = $cheeseCollection;
    }

    public function describe()
    {
        $result = $this->base->describe();

        foreach($this->components as $component)
        {
            $result .= ", " . $component->describe();
        }

        $result .= " with ";

        foreach($this->cheeseCollection as $cheese)
        {
            $result .= $cheese->describe();
        }

        return $result;
    }
}