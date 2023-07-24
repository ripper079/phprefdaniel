<?php

/**
 * Demonstrates different errors outputing depending on type hinting in the class
 */

declare(strict_types=1);

class Car
{
    public int $maxSpeed;
    public $weight;

    private string $vinNumber;

    public function __construct()
    {
        echo "Constructor called for " . static::class . PHP_EOL;
        //$this->vinNumber = "1245asdfa3465";
        $this->vinNumber = uniqid('carvinid');
    }

    public function setVinNumber(string $vinNumber): void
    {
        $this->vinNumber = $vinNumber;
    }

    public function getVinNumber(): string
    {
        return $this->vinNumber;
    }

    //Destructor
    public function __destruct()
    {
        echo "De-constructor called for " . __CLASS__ . PHP_EOL;
    }


    //A static function that creates an instance of this class
    public static function create(): static
    {
        return new static();
    }
}
