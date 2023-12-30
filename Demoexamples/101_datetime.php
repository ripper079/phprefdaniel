<?php

//The DateTime class provides OOP way of working with dates and times. This class is mutable
//There is also a DateTime class that is immutable named DateTimeImmutable

$currentDateTime = new DateTime();
$newYear2024EveryWhere = new DateTime('2024-01-01 00:00:00');

//Create timezones
//Specific timezones, https://www.php.net/manual/en/timezones.php
$timezoneSweden = new DateTimeZone('Europe/Stockholm');
$timezoneThailand =  new DateTimeZone('Asia/Bangkok');

//Create Datetime for a specific region
$dateTimeSweden = new DateTime('now', $timezoneSweden);
$dateTimeThailand = new DateTime('now', $timezoneThailand);

//Calculate, returns a DateInterval
//https://www.php.net/manual/en/class.dateinterval.php
$timeLeftNewYearThailand = $newYear2024EveryWhere->diff($dateTimeThailand);
$timeLeftNewYearSweden = $newYear2024EveryWhere->diff($dateTimeSweden);

echo "Current Time in Thailand is:" . $dateTimeThailand->format('Y-m-d H:i:s') . PHP_EOL;
//https://www.php.net/manual/en/class.dateinterval.php
echo "Time left to new year is:" . $timeLeftNewYearThailand->y . "-" . $timeLeftNewYearThailand->m . "-" . $timeLeftNewYearThailand->d . " " . $timeLeftNewYearThailand->h . ":" . $timeLeftNewYearThailand->i . ":" . $timeLeftNewYearThailand->s . PHP_EOL . PHP_EOL; //UGLLYYYYY

echo "Current Time in Sweden is:" . $dateTimeSweden->format('Y-m-d H:i:s') . PHP_EOL;
//https://www.php.net/manual/en/dateinterval.format.php
echo "Time left to new year is:" . $timeLeftNewYearSweden ->format('%y-%M-%D %H:%I:%S') . PHP_EOL . PHP_EOL;


//Customer order
$orderDateTime = new DateTime("2024-03-7");
$lastInvoiceDateTime = clone $orderDateTime;                //Clone it first
$lastInvoiceDateTimeImproved = clone $orderDateTime;        //Clone it first
//https://www.php.net/manual/en/datetime.modify.php      , beware that handling edge cases with month may yield wrong date
$lastInvoiceDateTime->modify('+1 month');         //7 days to pay it
echo "Alt 1 - The customer ordered it: " . $orderDateTime->format('Y-m-d H:i:s') . " and needs to pay the invoice before " . $lastInvoiceDateTime->format('Y-m-d H:i:s') . PHP_EOL . PHP_EOL;           //2024-03-07 00:00:00 and  2024-04-07 00:00:00

$lastInvoiceDateTimeImproved->add(new DateInterval('P1M'));         //Adding one month with DateInterval
echo "Alt 2 - The customer ordered it: " . $orderDateTime->format('Y-m-d H:i:s') . " and needs to pay the invoice before " . $lastInvoiceDateTimeImproved->format('Y-m-d H:i:s') . PHP_EOL . PHP_EOL;   //2024-03-07 00:00:00 and  2024-04-07 00:00:00

$myBirthDateTime = new DateTime("1979-12-16 23:12:42");
$worldWarTwoDateTime = new DateTime("1939-09-01 12:10:59");

//Compare DateTimes Times
if ($myBirthDateTime > $worldWarTwoDateTime) {
    echo "I was born after world war 2" . PHP_EOL;
} else {
    echo "I was born before world war 2" . PHP_EOL;
}

//https://www.php.net/manual/en/dateinterval.construct.php
$interval65Year = new DateInterval('P65Y');     //65 year interval

//My 65 year birth day
$my65BirthDay = (clone $myBirthDateTime)->add($interval65Year);
echo "I will be 65 in " . $my65BirthDay->format('Y-m-d H:i:s') . PHP_EOL;


//Get the timestamp for my birthDay
$myBirthDayTimeStamp = $myBirthDateTime->getTimestamp();
echo "The timestamp for my birthday is: " . $myBirthDayTimeStamp . PHP_EOL;

//$Get time zone
//echo "For sweden..." . $dateTimeSweden->getTimezone()->getName() . PHP_EOL;
