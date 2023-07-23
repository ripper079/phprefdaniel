<?php

namespace Coffeeheaven;

require './traits/LatteTrait.php';

//INHERITANCE
// class LatteMaker extends CoffeeMaker
// {    
//     public function makeLatte()
//     {
//         echo static::class . ' is making latte' . PHP_EOL;        
//     }    
// }

//TRAITS
class LatteMaker extends CoffeeMaker
{    
    //Will import this code at compile time
    use LatteTrait;
      
}