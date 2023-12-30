<?php

//The date function - The older way or working with date, time and timestamp. Working with function insteed of classes

//https://www.php.net/manual/en/timezones.php
date_default_timezone_set('Europe/Stockholm');

//https://www.php.net/manual/en/function.date
$currentDateTimeInSweden = date("Y-m-d H:i:s");
$worldWarTwoDateTime = date("1939-09-01 12:10:59");
$timeStampWorldWarTwoDateTime = strtotime($worldWarTwoDateTime);                        //TimeStamps

$myBirthDateTime = date("1979-06-16 19:12:16");             //FAKE
$myBirthYear = date('Y', strtotime($myBirthDateTime));      //1979
$myBirthMonth = date('m', strtotime($myBirthDateTime));     //06
$myBirthDay = date('d', strtotime($myBirthDateTime));       //19
$myBirthHour = date('H', strtotime($myBirthDateTime));      //23
$myBirthMinit = date('i', strtotime($myBirthDateTime));     //12
$myBirthSecond = date('s', strtotime($myBirthDateTime));    //16

//From timestamp also possible
$startYearWorldWarTwo = date('Y', strtotime($timeStampWorldWarTwoDateTime));        //1939
//echo $startYearWorldWarTwo;

//              MANIPULATE
//Manipulate date, dont use this approach if more than one month. Because each month differ in days
$myTimeStampBirthDay = strtotime($myBirthDateTime);                                 //Timestamp
// Add 1 day, 2 hours, and 30 minutes to the timestamp
$myTimeStampBirthDay += 1 * 24 * 60 * 60;  // 1 day in seconds
$myTimeStampBirthDay += 2 * 60 * 60;       // 2 hours in seconds
$myTimeStampBirthDay += 30 * 60;           // 30 minutes in seconds
$updatedBirthDateTimeOne = date('Y-m-d H:i:s', $myTimeStampBirthDay);          //1979-06-17 21:42:16
//Alternative 1
//echo $updatedBirthDateTimeOne;

//Alternative 2, still suffer from same month problem as previous example. But a lot easier. PS also possible to subtract
$updatedBirthDateTimeTwo = date('Y-m-d H:i:s', strtotime($myBirthDateTime . ' +65 years +2 months +3 days +2 hours +30 minutes +5 seconds'));       //Metter solution may be to build up this string and pass it a argument
//echo $updatedBirthDateTimeTwo;

//Lets get current time in Thailand, all cities are in the same timezone
date_default_timezone_set('Asia/Bangkok');
$currentDateTimeInThailand = date("Y-m-d H:i:s");
//echo "The time in Thailand is: " . $currentDateTimeInThailand . PHP_EOL;

//In Russia, many citries are in different timezones
date_default_timezone_set('Europe/Minsk');
$currentDateTimeInMinsk = date("Y-m-d H:i:s");
//echo "The time in Minsk is: " . $currentDateTimeInMinsk . PHP_EOL;

//Here is how we can show times with padding added. Improve visualibility
//echo str_pad("The time in Thailand is:", 35, ' ', STR_PAD_RIGHT) . $currentDateTimeInThailand . PHP_EOL;
//echo str_pad("The time in Minsk is:", 35, ' ', STR_PAD_RIGHT) . $currentDateTimeInMinsk . PHP_EOL;

//COMPARE
//When comparing also use timestamp, resuing the previously declared timestamps
// if ($myTimeStampBirthDay  > $timeStampWorldWarTwoDateTime) {
//     echo "I was born AFTER WW2" . PHP_EOL;
// } else {
//     echo "I was born BEFORE WW2" . PHP_EOL;
// }





// $currentTimeStamp = strtotime($currentDate);
// echo "Current date=" . $currentDate . "<br>";              //The current date
// echo "Current timestamp=" . $currentTimeStamp . "<br><br>";      //Current date in timestamp

// $currentTime = time();
// // 5(days) * 24(hour) * 60(minits)x 60(seconds) - five days from now
// $fiveDaysAfter = $currentTime + (5 * 24 * 60 * 60);

// echo "1.Unix timestamp current=" . $currentTime . "<br>";                     //The actual seconds passed since Unix Epoch - Unix timestamp
// echo "2.Unix timestamp 5 days later=" . $fiveDaysAfter . "<br>";              //  ... 5 Days after
// echo "Or more user friendly dates - Aka format this to a date.<br>";
// echo "1. " . date("Y-m-d H:i:s", $currentTime) . "<br>";
// echo "2. " . date("Y-m-d H:i:s", $fiveDaysAfter) . "<br>";

// $bornDate = "1979-12-16 12:00:00";          //Possible to skip time portion
// $bornDateTimeStamp = strtotime($bornDate);   //[StringToTime]
// echo $bornDateTimeStamp . "<br>";           //Seconds passed from Unix Epoch until i was born
// $formattedBornDate = date("Y-m-d", $bornDateTimeStamp);
// $formattedBornTime = date("H:i:s", $bornDateTimeStamp);
// echo "Borndate=" . $formattedBornDate . "<br>";           //Back again
// echo "Borntime=" . $formattedBornTime . "<br>";           //Back again

// $currentYear = date("Y", strtotime(date("Y-m-d")));
// $bornYear = date("Y", strtotime($bornDate));
// echo "Current Year=" . $currentYear . "<br>";
// echo "Born Year=" . $bornYear . "<br>";
// echo "You are " . ($currentYear - $bornYear) . " year(s) old<br>";
