<?php

/*      Data and time       */
/* In order to get the most accurate time seconds is preferable when making time calculations */
/* Or use build in constant ALWAYS */

# https://www.php.net/manual/en/datetime.format.php   //List of valid datetimeformats

echo "Date and times<br><br>";
$currentTimeStamp = time();         //Return the time since Unix Epoch (January 1 1970 00:00:00 GMT) in seconds(passed);
$fiveDaysInSeconds = 5 * 24 * 60 * 60;                      //days * hours * minutes * seconds
$currentDate = date('Y-m-j H:i', $currentTimeStamp);                        //Creates a date based on a timestamp
$fiveDaysFromNow = date('Y-m-j H:i', $currentTimeStamp + $fiveDaysInSeconds);

echo "Current timestamp= " . $currentTimeStamp . "<br>";
echo "Adding 5 days from now:" . $fiveDaysFromNow . "<br>";
echo "<br><br><br>";


echo "My personal info<br>";
$retirementAge = 67;
//$stringBornDate = '1979-12-16 05:10';        //With hour and minutes
$stringBornDate = '1979-12-16';        
$myBornTimeStamp = strtotime($stringBornDate);        //Creates a timestamp based on my born date (set hour:second to 00:00)
$myBornDate = date('Y-m-j g:ia', $myBornTimeStamp);      //Creates a date when I was born
$myEighteenYearDate = date('Y-m-j', strtotime($myBornDate . " +18 years" ));        //Add 18 to calculate when i am 18 year
$myRetirementDate = date('Y', strtotime($myBornDate . ' +' . $retirementAge . 'years'));

echo "My born timestamp:" . $myBornTimeStamp . "<br>";
//echo "Alt My born timestamp:" . mktime(0,0,0,12,16,1979) . "<br>";//The same a the previous code
echo "I was born on date:" . $myBornDate . "<br>";
echo "I will turn 18 on: " . $myEighteenYearDate . "<br>";
echo "I will retire year:" . $myRetirementDate . "<br><br>";

# Timezones
//$currentTimeZone = date_default_timezone_get();
echo "Current timezone:" . date_default_timezone_get() . " - and the date/time is " . date('Y-m-j g:ia', time()) . "<br>";
echo "Setting to moscow timezone...<br>";
# Moscow TimeZone
date_default_timezone_set('Europe/Moscow');
echo "Switching to moscow timezone: ". date_default_timezone_get() . " - and the date/time is " . date('Y-m-j g:ia', time()) . "<br>";
# Bangkok TimeZone
date_default_timezone_set('Asia/Bangkok');
echo "Switching to BANGKOK timezone: ". date_default_timezone_get() . " - and the date/time is " . date('Y-m-j g:ia', time()) . "<br>";
# Los Angeles Timezone
date_default_timezone_set('America/Los_Angeles');
echo "Switching to Los Angeles timezone: ". date_default_timezone_get() . " - and the date/time is " . date('Y-m-j g:ia', time()) . "<br>";
# Stockholm Timezone
date_default_timezone_set('Europe/Stockholm');
echo "Switching to Stockholm timezone: ". date_default_timezone_get() . " - and the date/time is " . date('Y-m-j g:ia', time()) . "<br>";
# UTC Timezone
date_default_timezone_set('UTC');
echo "Switching to UTC timezone: ". date_default_timezone_get() . " - and the date/time is " . date('Y-m-j g:ia', time()) . "<br>";

//Convert a date to an array, argument need to be a date object
echo '<pre>';
print_r(date_parse($myBornDate));
echo '</pre>';
