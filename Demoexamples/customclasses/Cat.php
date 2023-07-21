<?php

declare(strict_types=1); 

class Cat extends Animal{
    //Constructor
    public function __construct(int $legCount) 
    {
        //Call base class
        parent::__construct($legCount);
        echo "Constructor called for " . __CLASS__ . PHP_EOL;
    }

    //Destructor
    public function __destruct()
    {
        echo "De-constructor called for " . __CLASS__ . PHP_EOL;    
    }

    public function speak(): void
    {
        echo "Cat speaking MEOW..." . PHP_EOL;
    }

    public function move(): void
    {
        echo "Cat running on ground!" . PHP_EOL;
    }    
}