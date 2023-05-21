<?php
//https://www.php.net/manual/en/ref.math.php

echo abs(-5.5) . "<br>";
echo round(-5.5) . "<br>";
echo pow(4,4) . "<br>";
echo sqrt(9) . "<br>";
echo rand(1, 59) . "<br><br>";     //A random number between 1 and 59

//https://www.php.net/manual/en/ref.datetime.php
echo date("Y-m-d H:i:s") . "<br>";          //The current date
echo time() . "<br><br>";                       //The actual seconds passed since Unix Epoch

$bornDate = "1979-12-16 12:00:00";          //Possible to skip time portion
$bornDateTimeStamp = strtotime($bornDate);   //[StringToTime]
echo $bornDateTimeStamp . "<br>";           //Seconds passed from Unix Epoch until i was born
$formattedBornDate = date("Y-m-d", $bornDateTimeStamp);
echo $formattedBornDate . "<br>";           //Back again
?>
