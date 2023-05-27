<?php

declare(strict_types=1);

namespace kanelbulle;

class Transaction
{
    public function __construct()
    {
        echo "Constructor called for " . __CLASS__ . "<br>";
        echo "In namespace: " . __NAMESPACE__ . "<br>";
    }
}

new Transaction();