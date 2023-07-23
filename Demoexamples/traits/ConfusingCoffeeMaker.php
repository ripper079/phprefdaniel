<?php
namespace Coffeeheaven;

//This file serves as a demo how complicated/messy it can get when coding inappropriate with traits
//Compare with the AllinOneCoffeMaker class

require_once './traits/CoffeeTrait.php';
require_once './traits/LatteTrait.php';
require_once './traits/CappuccinoTrait.php';


class ConfusingCoffeeMaker
{
    use CoffeeTrait;
    use CappuccinoTrait;
    use LatteTrait;  

    //Is overriding makeCoffee
    public function makeCoffee()
    {
        echo static::class . ' is making coffee (ConfusingCoffeeMake)' . PHP_EOL;
    }

    //Now even not assessable
    private function makeCappuccino()
    {
        echo static::class . ' is making cappuccino' . PHP_EOL;
    }  
}