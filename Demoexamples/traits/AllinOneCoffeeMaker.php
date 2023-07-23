<?php

namespace Coffeeheaven;

require_once './traits/CoffeeTrait.php';
require_once './traits/LatteTrait.php';
require_once './traits/CappuccinoTrait.php';


class AllinOneCoffeeMaker 
{
    use CoffeeTrait;
    use CappuccinoTrait;
    use LatteTrait;    

    public function makeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}