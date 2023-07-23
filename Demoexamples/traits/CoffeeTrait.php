<?php

namespace Coffeeheaven;


trait CoffeeTrait
{
    public function makeCoffee()
    {
        echo static::class . ' is making coffee' . PHP_EOL;
    }
}