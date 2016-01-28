<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 12:28 AM
 */

namespace Pizzeria\Models\Components;


abstract class ComponentBase extends Base
{
    protected $factor;

    public function __construct($factor)
    {
        $this->setFactor($factor);
    }

    public function setFactor($factor)
    {
        $this->factor = $factor;
    }

    public function getFactor()
    {
        return $this->factor;
    }

    public function getPrice()
    {
        return parent::getPrice() * $this->factor;
    }

    public function describe()
    {
        if($this->factor !== 1)
            return $this->factor . " " . $this->name;
        else
            return $this->name;
    }
}