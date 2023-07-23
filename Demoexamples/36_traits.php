<?php

//Traits are mainly used for reduce code duplication, think of copy and paste
//PHP does NOT support multiple inheritance. Instead of using interfaces that uses the same code (not good, they should differ) traits solves this problem by sharing code.
//There are many different kinds of ways of using traits and many of them are NOT good. Im trying here to use good examples
//Beware of
//1. Instantiating of trait is prohibited, only use traits in classes OR withing other traits
//2. Function with the same name in class takes precedence over the traits method
//3. The same logic applies for if a subclass parent signature(method) has same as trait, then traits method take precedence...
//4. Conflict resolution is a nightmare. To much freedom and this equals in-consistency!      
// Trait != Contract but Interface = Contract

use Coffeeheaven\AllinOneCoffeeMaker;
use Coffeeheaven\CoffeeMaker;
use Coffeeheaven\LatteMaker;

require_once './traits/CoffeeMaker.php';
require_once './traits/LatteMaker.php';
require_once './traits/CappuccinoMaker.php';
require_once './traits/AllinOneCoffeeMaker.php';
require_once './traits/ConfusingCoffeeMaker.php';

//SECTION INHERITANCE
function displayInheritanceAndTraitDemo(): void 
{
    $myCoffee = new \Coffeeheaven\CoffeeMaker();
    $myCoffee->makeCoffee();
    echo PHP_EOL;
    
    $myLatte = new \Coffeeheaven\LatteMaker();
    $myLatte->makeCoffee();
    $myLatte->makeLatte();
    echo PHP_EOL;
    
    $myCappuccinoMaker = new \Coffeeheaven\CappuccinoMaker();
    $myCappuccinoMaker->makeCoffee();
    $myCappuccinoMaker->makeCappuccino();
    echo PHP_EOL;
    
    $myUltimateCoffeeMaker = new \Coffeeheaven\AllinOneCoffeeMaker();
    $myUltimateCoffeeMaker->makeCoffee();
    $myUltimateCoffeeMaker->makeCappuccino();
    $myUltimateCoffeeMaker->makeLatte();
    echo PHP_EOL;

    //Static functions
    \Coffeeheaven\LatteMaker::foo();
    echo "Lucky number of latte=" . \Coffeeheaven\LatteMaker::$LUCKY_NUMBER . PHP_EOL;
}

//SECTION traits that start making it confusing
//Trait that are messy, avoid
function displayMessyTraits(): void 
{
    echo "Confusing Traits" . PHP_EOL;
    $myOddCoffee = new \Coffeeheaven\ConfusingCoffeeMaker();
    $myOddCoffee->makeCoffee();
    //$myOddCoffee->makeCappuccino();       //Now impossible    

}

displayInheritanceAndTraitDemo();
//displayMessyTraits();





