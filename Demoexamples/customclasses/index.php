<?php

declare(strict_types=1);

require_once('./Animal.php');
require_once('./Cat.php');
require_once('./Car.php');


echo "Its alive!" . PHP_EOL;

//Abstract prevent creating
//$genericAnimal =  new Animal(2);
$myCat = new Cat(4);

//$genericAnimal->speak();
$myCat->speak();

echo Animal::getAnimalCount() . " animal(s) created" . PHP_EOL;

$myCar = new Car();
echo $myCar->weight;            //Gives warning and RETURNS null
#echo $myCar->maxSpeed;          //Fatal Error, stop script execution
