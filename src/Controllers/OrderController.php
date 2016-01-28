<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 7:01 PM
 */

namespace Pizzeria\Controllers;

use Pizzeria\Validation\Validator;

class OrderController
{
    private $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function calculatePrice($str)
    {
        $this->validator->validate($str);

    }
}