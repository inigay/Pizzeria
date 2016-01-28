<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 10:40 PM
 */

namespace Pizzeria\Models;


interface Calculatable
{
    public function getTotal(DiscountModel $model);
}