<?php

namespace Coffeeheaven;

require_once './traits/CoffeeTrait.php';

//INHERITANCE
// class CoffeeMaker 
// {
//     public function makeCoffee()
//     {
//         echo static::class . ' is making coffee' . PHP_EOL;
//     }
// }

class CoffeeMaker 
{
    use CoffeeTrait;
     
}