<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 1/28/2016
 * Time: 4:42 AM
 */

namespace Pizzeria\Factory;


use Pizzeria\Exceptions\InvalidPriceException;
use Pizzeria\Models\Components\American;
use Pizzeria\Models\Components\Meatball;
use Pizzeria\Models\Components\Mozzarella;
use Pizzeria\Models\Components\Mushroom;
use Pizzeria\Models\Components\Olive;
use Pizzeria\Models\Components\Pepper;
use Pizzeria\Models\Components\Swiss;
use Pizzeria\Models\Components\ThinCrust;
use Pizzeria\Models\Components\ThickCrust;
use Pizzeria\Models\Components\Tomato;
use Pizzeria\Models\Components\TomatoBasil;
use Pizzeria\Models\Components\TomatoGarlic;
use Pizzeria\Models\OrderCollection;

class OrderCollectionFactory
{
    public static function createOrder($str)
    {
        $str = strtolower($str);

        $words = array("half", "one","double","triple");
        $actual = array("0.5",'','2','3');

        $order = new OrderCollection();
        $str = str_replace($words,$actual, $str);
        list($crust,$rest) = explode("crust,", $str);
        list($components, $cheese) = explode("with", $rest);

        if(trim($crust) == "thin")
            $order->addBase(new ThinCrust());
        else
            $order->addBase(new ThickCrust());


        //Now Add components
        if($components){
            $components = str_replace("and ", "", $components);
            $components = explode(", ", $components);
            foreach($components as $component)
            {
                $component = trim($component);
                //Now Need to Extract Double Triple portions
                if(strpos($component," ") !== false){
                    list($factor, $name) = explode(" ", $component);
                }else{
                    $name = $component;
                    $factor = 1;
                }


                $obj = null;
                switch($name)
                {
                    case "tomato": $obj = new Tomato($factor);
                        break;
                    case "tomato-basil": $obj = new TomatoBasil($factor);
                        break;
                    case "tomato-garlic": $obj = new TomatoGarlic($factor);
                        break;
                    case "pepper": $obj = new Pepper($factor);
                        break;
                    case "olive": $obj = new Olive($factor);
                        break;
                    case "mushroom": $obj = new Mushroom($factor);
                        break;
                    case "meatball": $obj = new Meatball($factor);
                }

                $order->addComponent($obj);
            }

            }

        //Now Work with Cheese if exists
        if($cheese){
            $cheeseObj = null;
            $cheese = trim($cheese);
            //Now Need to Extract Double Triple portions
            if(strpos($cheese," ") !== false){
                list($factor, $name) = explode(" ", $cheese);
            }else{
                $name = $cheese;
                $factor = 1;
            }

            switch($name)
            {
                case "american": $cheeseObj = new American($factor);
                    break;
                case "swiss": $cheeseObj = new Swiss($factor);
                    break;
                case "mozzarella": $cheeseObj = new Mozzarella($factor);
                    break;
            }

            $order->addCheese($cheeseObj);

        }

        return $order;
    }

}