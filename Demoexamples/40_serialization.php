<?php

//Serialization = Convert a value(object) to string form
//De-serialization = Convert a string form to a value(object)

//When using custom class proper magic methods need to be implemented, se Game class for an example
//Restrictions to serialization - No resources and closures

require_once './customclasses/Game.php';

//Prettier output in cli or html
// $flexLineBreak = "<br>";
$flexLineBreak = PHP_EOL;

echo "Hello Serialization". $flexLineBreak . $flexLineBreak;

$male = true;
$luckyNumber = 999;
$greeting = "Hello Daniel to the world";
$pii = 3.1415;
$primeNumber = [2,3,5];
$arrayAssociate = ['one' => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5];
$myGame = new Game("Doom", 2013, "Genix Ltd");

//Now Serialize these value, aka transform to a string value
$serializedMale = serialize($male);
$serializedLuckyNumber = serialize($luckyNumber);
$serializedGreeting = serialize($greeting);
$serializedPii = serialize($pii);
$serializedPrimeNumber = serialize($primeNumber);
$serializedArrayAssociate = serialize($arrayAssociate);
$serializedMyGame = serialize($myGame);



echo "Serialize values..." . $flexLineBreak;
//Get the string representation of these values
echo $serializedMale . $flexLineBreak;
echo $serializedLuckyNumber . $flexLineBreak;
echo $serializedGreeting . $flexLineBreak;
echo $serializedPii . $flexLineBreak;
echo $serializedPrimeNumber . $flexLineBreak;
echo $serializedArrayAssociate . $flexLineBreak;
echo $serializedMyGame . $flexLineBreak;
echo $flexLineBreak . $flexLineBreak;

//Now Lets de-serialized/unserialize values
$deserializedMale = unserialize($serializedMale);
$deserializedLuckyNumber = unserialize($serializedLuckyNumber);
$deserializedGreeting = unserialize($serializedGreeting);
$deserializedPii = unserialize($serializedPii);
$deserializedPrimeNumber = unserialize($serializedPrimeNumber);
$deserializedArrayAssociate = unserialize($serializedArrayAssociate);
$deserializedMyGame = unserialize($serializedMyGame);                   //Type of Game

//No lets unserialize (aka de-serialize) it (PS. it actually creates a new object)
echo "Deserialize values..." . $flexLineBreak;
var_dump($deserializedMale);
echo $flexLineBreak;
var_dump($deserializedLuckyNumber);
echo $flexLineBreak;
var_dump($deserializedGreeting);
echo $flexLineBreak;
var_dump($deserializedPii);
echo $flexLineBreak;
var_dump($deserializedPrimeNumber);
echo $flexLineBreak;
var_dump($deserializedArrayAssociate);
echo $flexLineBreak;
var_dump($deserializedMyGame);
echo $flexLineBreak;

echo "Extract Values from object..." . $flexLineBreak;
var_dump($deserializedMyGame);
echo "Title of the game=" . $deserializedMyGame->name . $flexLineBreak;
