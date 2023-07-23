<?php

namespace Coffeeheaven;

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' is making latte' . PHP_EOL;        
    }  
    
    //STATIC methods and properties
    //Each class that have static properties of method has its own independent instance of it and is NOT shared.
    public static function foo(): void 
    {
        echo "Static foo method inside " . static::class . PHP_EOL;
    }
    
    public static int $LUCKY_NUMBER = 999;
    

    //The messy section
    //The class/trait that uses this trait must implement this function BUT the class/trait itself do NOT need to abstract (differs from regular inheritance)
    //abstract public function getMilkType(): string;
}