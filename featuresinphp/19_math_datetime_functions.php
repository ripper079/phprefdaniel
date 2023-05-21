<?php
//https://www.php.net/manual/en/ref.math.php

//By default all date and time function use the time zone configured in php configuration
//Set new time zone, https://www.php.net/manual/en/timezones.php
//date_default_timezone_set("Asia/Bangkok");            


echo abs(-5.5) . "<br>";
echo round(-5.5) . "<br>";
echo pow(4,4) . "<br>";
echo sqrt(9) . "<br>";
echo rand(1, 59) . "<br><br>";     //A random number between 1 and 59

//https://www.php.net/manual/en/ref.datetime.php
echo "Current date=" . date("Y-m-d H:i:s") . "<br>";          //The current date
echo time() . "<br><br>";                       //The actual seconds passed since Unix Epoch

$bornDate = "1979-12-16 12:00:00";          //Possible to skip time portion
$bornDateTimeStamp = strtotime($bornDate);   //[StringToTime]
echo $bornDateTimeStamp . "<br>";           //Seconds passed from Unix Epoch until i was born
$formattedBornDate = date("Y-m-d", $bornDateTimeStamp);
$formattedBornTime = date("H:i:s", $bornDateTimeStamp);
echo "Borndate=" . $formattedBornDate . "<br>";           //Back again
echo "Borntime=" . $formattedBornTime . "<br>";           //Back again

$currentYear = date("Y", strtotime(date("Y-m-d")));
$bornYear = date("Y", strtotime($bornDate));
echo "Current Year=" . $currentYear . "<br>";
echo "Born Year=" . $bornYear . "<br>";
echo "You are " . ($currentYear - $bornYear) . " year(s) old<br>";
?>
