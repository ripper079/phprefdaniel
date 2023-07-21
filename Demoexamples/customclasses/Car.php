<?php

declare(strict_types=1);

class Car {

    public int $maxSpeed;
    public $weight;

    private string $vinNumber;

    public function __construct() {
        $this->vinNumber = "1245asdfa3465";
    }    
}