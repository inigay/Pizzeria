<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/27/2016
 * Time: 6:52 PM
 */
require_once("vendor/autoload.php");

use Pizzeria\Controllers\OrderController;

$a = new OrderController();

echo "Please Input an Order: \n";
$handle = fopen("php://stdin", "r");

$str = fgets($handle);

fclose($handle);

$a->calculatePrice($str);