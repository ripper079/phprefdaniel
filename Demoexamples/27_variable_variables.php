<?php

/**
 * Allow you to create and manipulate variables DYNAMICALLY using the values of other variables
 * Be careful when using this feature as it actually can trick and confuse the interpreter...
 */


$name = "Daniel";

$$name = "Is a man";

echo "name variable=" . $name . "<br>";
echo "dynamic new variable=" . $Daniel . "<br>";
echo "dynamic new variable=" .  $$name . "<br>";
echo "dynamic new variable=" .  ${$name} . "<br>";
echo "dynamic new variable= {$$name}<br>";

