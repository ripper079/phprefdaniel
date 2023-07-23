<?php

namespace Coffeeheaven;

require './traits/CappuccinoTrait.php';

//INHERITANCE
// class CappuccinoMaker extends CoffeeMaker
// {
//     public function makeCappuccino()
//     {
//         echo static::class . ' is making cappuccino' . PHP_EOL;
//     }    
// }


//TRAITS
class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait;
      
}

