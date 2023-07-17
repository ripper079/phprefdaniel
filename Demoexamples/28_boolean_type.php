<?php

echo "Demo of boolean data type<br>";

//Values of boolean type is not case sensitive, true === TRUE
$isComplete = true;
$isDoneText = "YES";

//integers 0 and -0 = false
//floats 0,0 and -0.0 = false
//'' = false
//'0' = false
// [] = false
//null = false

//Every other conversion are considered true/TRUE


var_dump($isComplete);
echo "<br>";
var_dump((string) false);
echo "<br>";
var_dump((string) true);
echo "<br>";
echo "---------------------------<br>";
var_dump((int) false);
echo "<br>";
var_dump((int) true);
echo "<br>";
echo "---------------------------<br>";
var_dump((float) false);
echo "<br>";
var_dump((float) true);
echo "<br>";
echo "---------------------------<br>";
var_dump((array) false);
echo "<br>";
var_dump((array) true);
echo "<br>---------------------------<br>";

echo "";
echo "";
if (is_bool($isComplete)) {
    echo $isComplete . ", is of type bool<br>";
} else {
    echo $isComplete . ", is NOT of type bool<br>";
}
echo "----------------^^^^^^^^^-----------<br>";
if (is_bool($isDoneText)) {
    echo $isDoneText . ", is of type bool<br>";
} else {
    echo $isDoneText . ", is NOT of type bool<br>";
}
