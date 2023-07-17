<?php

/**
 * String here
 */
$myFirstName = "Daniel";
$myLastName="Oikarainen";
$fullName = "Daniel $myLastName";               //Works
$fullNameAlt = '$myFirstName Oikarainen';       //Do NOT work as intended
$myAge=43;
$myBirthDate=new DateTime('1979-12-16 00:00:00');
$location = "Sweden";
$location .= " in Boras";                       //Concatenate

echo 'My name is ' . $myFirstName . ' ' . $myLastName . "<br>";
echo "And i $myAge year(s) old<br>";
echo "Living place=" . $location . "<br>";
echo "Concatenated fullname Ver 1=" . $fullName . "<br>";
echo "Concatenated fullname Ver 2=" . $fullNameAlt . "<br>";

/**
 * Here docs
 */

$heredocString = <<<CONTACT
Fullname = $myFirstName $myLastName
Age = $myAge
location = $location;
CONTACT;
echo "----------------------------------<br>";
//echo $heredocString;      //Not the best way
echo nl2br($heredocString);

$formattedHeredoc = <<<FORMATTEDCONTACT
<h1>$myFirstName $myLastName</h1>
<h3>$myAge year(s) old</h3>
<h6>Location= $location</h6>
FORMATTEDCONTACT;
echo "----------------------------------<br>";
echo $formattedHeredoc;

/**
 * Now docs
 * Pratically the same as heredocs but with the difference that they are treated as single quotes and the identifier must be surronden with ''
 * E.i 'CONTACT' and 'FORMATTEDCONTACT'
 */
