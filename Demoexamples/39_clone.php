<?php

require_once './customclasses/Game.php';

function printGame(Game $pGame)
{
    echo "<br>Game Name=" . $pGame->getName() . ", Release Year=" . $pGame->getReleaseYear() . ", and current executive owner= " . $pGame->getExectiveOwner() . ", id=" . $pGame->getIdString() .  "<br>";
}


//using the Game class in /Demoexamples/customclasses

//# Ways of creating an object
$myGame = new Game("Civ 4", 2003, "Cool Game Company");
$mySecretReference = $myGame;

//Access to original object....
//$mySecretReference->setExectiveOwner("Daniel Forge Company");

//Shallow copy, but have the same values
$cloneGame = clone $myGame;     //Clone do not call constructor

echo "<br>myGame<br>";
printGame($myGame);
echo "<br><br>";

echo "<br>mySecretReference<br>";
printGame($mySecretReference);
echo "<br><br>";

echo "<br>cloneGame<br>";
printGame($cloneGame);
echo "<br><br>";
