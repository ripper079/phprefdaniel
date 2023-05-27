<?php

//declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

echo "Welcome to cli power" . PHP_EOL;

$idUnique = new \Ramsey\Uuid\UuidFactory();

echo $idUnique->uuid4();
