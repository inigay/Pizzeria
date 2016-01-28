<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 4:52 AM
 */

namespace Pizzeria\Exceptions;


class InvalidPriceException extends \InvalidArgumentException
{
    public function __construct($message)
    {
        parent::__construct($message);
    }
}