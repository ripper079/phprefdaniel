<?php

//Datetime the object oriented way of handling times
//Note The class DateTime is mutable
//Note The class DateTimeImmutable is Immutable (chaining is not possible here)

declare(strict_types=1);

namespace DemoDateTimeDaniel;

use DateInterval;
use DatePeriod;
use DateTime;
use DateTimeImmutable;
use DateTimeZone;

//Prettier output in cli or html
// $flexLineBreak = "<br>";
$flexLineBreak = PHP_EOL;
echo "Example of using the DateTime object" . $flexLineBreak . $flexLineBreak;


function printDifferentTimeZoneTimes(): void
{
    //Get current time for UTC timezone
    $dateTime = new \DateTime('now', new DateTimeZone('UTC'));
    var_dump($dateTime);
    //Set to timezone for Stockholm
    $dateTime->setTimezone(new DateTimeZone('Europe/Stockholm'));
    var_dump($dateTime);
    //Set to timezone for Bangkok
    $dateTime->setTimezone(new DateTimeZone('Asia/Bangkok'));
    var_dump($dateTime);
    //Set to timezone for Mexico_City
    $dateTime->setTimezone(new DateTimeZone('America/Mexico_City'));
    var_dump($dateTime);
}

function printMyBirthday(): void
{
    #$myBirthDay = new DateTime("1979-12-16", new DateTimeZone('Europe/Stockholm'));
    $myBirthDay = new DateTimeImmutable("1979-12-16", new DateTimeZone('Europe/Stockholm'));

    $prettyFormatMyBirthDay = $myBirthDay->format('j F o');

    $myFiftyBirthDay = $myBirthDay->add(new DateInterval('P50Y'));
    var_dump($prettyFormatMyBirthDay);
    var_dump($myFiftyBirthDay);

}

function printBackToWorkDay(): void 
{
    $startWorkingAftedVaction = new DateTime("2023-08-01", new DateTimeZone('Europe/Stockholm'));
    //Oohh i get one extra week
    //Could clone here if you want
    //$extraWeekAfterStartWorkingAftedVaction = clone $startWorkingAftedVaction;

    //Alternative 1
    // $startWorkingAftedVaction->modify('+1 week');
    // $startWorkingAftedVaction->setTime(8,0);
    #$startWorkingAftedVaction->modify('+1 week')->setTime(8,0);       //Possible to chain them

    //Alternative 2 - With DateInterval()
    $startWorkingAftedVaction->add(new DateInterval('P7d'));            //Add seven days

    var_dump($startWorkingAftedVaction);
}

function printSimulateDateFromApi(): void 
{
    # day/month/year - Europe
    # month/day/year - U.S.

    $apiCallInUsDate = '15/05/2023 3:30PM';
    //Static function to create a Datetime object
    $dateTimeFormattedEurope = DateTime::createFromFormat('d/m/Y g:iA', $apiCallInUsDate, new DateTimeZone('UTC')); //Precondition that it is in utc time
    var_dump($dateTimeFormattedEurope);
}

function printCompareDateTime(): void
{
    global $flexLineBreak;
    $birthDay = new DateTime('1979-12-16', new DateTimeZone('UTC'));
    $birthDay2 = new DateTime('1983-08-19', new DateTimeZone('UTC'));
    $millenniumDay = new DateTime('2000-01-01', new DateTimeZone('UTC'));
    $terrorAttackDay = new DateTime('2001-09-11', new DateTimeZone('UTC'));

    //Compare this way bool and int values
    var_dump($birthDay < $millenniumDay);
    var_dump($birthDay > $millenniumDay);
    var_dump($birthDay == $millenniumDay);
    var_dump($birthDay <=> $millenniumDay);

    $dateDiff = $birthDay->diff($birthDay2);                //Returns an array
    $yearDiff = $dateDiff->y;
    $prettyDateDiff = $dateDiff->format('%Y years, %m months, %d days, %H hour(s), %i minute(s), %s second(s)') . $flexLineBreak;

    echo $flexLineBreak . "Difference in year(s) is= " . $yearDiff . $flexLineBreak;
    echo "Detailed diff " . $prettyDateDiff . $flexLineBreak;
    //Compare with diff,
}

function printWrongMonth(): void
{
    $date = new DateTimeImmutable('2000-12-31');
    $interval = new DateInterval('P1M');

    $newDate1 = $date->add($interval);
    echo $newDate1->format('Y-m-d') . "\n";

    $newDate2 = $newDate1->add($interval);
    echo $newDate2->format('Y-m-d') . "\n";
}

function printDateInterval(): void 
{
    global $flexLineBreak;
    //Interval is specified to 1 day
    $periodWorldWarTwo = new DatePeriod(new DateTime("1939-09-01"), new DateInterval('P1D'), new DateTime("1945-09-02"));   //Ps this actually excludes the last day 
    #$periodWorldWarTwo = new DatePeriod(new DateTime("1939-09-01"), new DateInterval('P1D'), (new DateTime("1945-09-02"))->modify('+1 day'));   //Ps this actually excludes the last day 

    /*
    foreach ($periodWorldWarTwo as $key => $date) {
        echo $date->format('Y/m/d') . $flexLineBreak;
    }
    */


    //Print seven occurrences every other day since startdate "2001-02-04"
    $occurrences = 7; 
    $periodEveryOtherDay = new DatePeriod(new DateTime("2001-02-04"), new DateInterval('P2D'), $occurrences);           //Will get startdate and the subsequent 7 date(s) [in total 8]
    //$periodEveryOtherDay = new DatePeriod(new DateTime("2001-02-04"), new DateInterval('P2D'), $occurrences, DatePeriod::EXCLUDE_START_DATE);   //Only the subsequent 7 date(s) after startdate [in total 7]
    foreach ($periodEveryOtherDay as $key => $date) {
        echo $date->format('Y/m/d') . $flexLineBreak;
    }
}

# printDifferentTimeZoneTimes();
# printMyBirthday();
# printBackToWorkDay();
# printSimulateDateFromApi();
# printCompareDateTime();
# printWrongMonth();
printDateInterval();

