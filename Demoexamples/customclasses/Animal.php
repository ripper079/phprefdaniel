<?php

declare(strict_types=1);

//class Animal
abstract class Animal 
{
    private static int $COUNTER_ANIMAL = 0;
    private int $legCount;
    
    //Constructor
    public function __construct(int $legCount = 2) 
    {
        echo "Constructor called for " . __CLASS__ . PHP_EOL;
        $this->legCount = $legCount;
        self::$COUNTER_ANIMAL++;
    }

    //Destructor
    public function __destruct()
    {
        echo "De-constructor called for " . __CLASS__ . PHP_EOL;    
    }

    //Forces the sub class to implement this method
    abstract public function speak(): void;
    // public function speak(): void
    // {
    //     echo "Generic speaking of animal..." . PHP_EOL;
    // }

    public function getCountLeg(): int
    {
        return $this->legCount;
    }

    //Static functions
    public static function getAnimalCount()
    {
        return self::$COUNTER_ANIMAL;
    }
}