<?php

namespace Autoloaderdemo\Notification;

class Email
{
    public function __construct()
    {
        echo "Constructor called for " . __CLASS__ . "<br>";
        echo "In namespace: " . __NAMESPACE__ . "<br>";
    }
}

