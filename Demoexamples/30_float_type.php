<?php

echo "Float demo<br>";

//php float type
$price = 24.95;
$lossOfPrecision = floor((0.1 + 0.7)* 10);  //Should of course be 8
echo "Precision loss=" . $lossOfPrecision . "<br>";

$x = 0.23;
$y = 1 - 0.77;
var_dump($x, $y);

echo "<br>";

//Never compare floating values (if must use specific libraries for it)
if ($x === $y) {
    echo "Yes<br>";
} else {
    echo "No<br>";
}
