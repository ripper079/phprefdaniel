<?php

//Supports UTF-8
$firstName = "  örJAn    ";
$firstName = trim($firstName);                                                      // "örJAn"
$firstName =  mb_strtolower($firstName);                                            // "örjan"
$firstCharacter = mb_strtoupper(mb_substr($firstName, 0, 1, "UTF-8"), "UTF-8");     // "Ö"
$restOfString = mb_substr($firstName, 1, null, "UTF-8");                            // "rjan"
$firstNameSanitized = $firstCharacter . $restOfString;                              // "Örjan"


//Supports UTF-8
$lastName = "  ålandSSon    ";
$lastName = trim($lastName);                                                      // "ålandSSon"
$lastName =  mb_strtolower($lastName);                                            // "ålandsson"
$firstCharacter = mb_strtoupper(mb_substr($lastName, 0, 1, "UTF-8"), "UTF-8");     // "Å"
$restOfString = mb_substr($lastName, 1, null, "UTF-8");                            // "landsson"
$lastNameSanitized = $firstCharacter . $restOfString;                              // "Ålandsson"

$fullNameCustomer = $firstNameSanitized . " " . $lastNameSanitized;

# echo $fullNameCustomer;


//Converts name so the appear proper
//Returns "Örjan" from, "  örJAn    "
function do_sanitize_swedish_name($nameToSanitize)
{
    $copyName = $nameToSanitize;
    $copyName = trim($copyName);                                                        // Remove access white spaces begining and end
    $copyName = mb_strtolower($copyName);                                               // Mabe string lowercase
    $firstCharacter = mb_strtoupper(mb_substr($copyName, 0, 1, "UTF-8"), "UTF-8");      // Makes first letter to uppercase
    $restOfString = mb_substr($copyName, 1, null, "UTF-8");                             // and the rest unaltered
    $sanitizedString = $firstCharacter . $restOfString;                                 // Now the name is in the right format e.i Pelle
    return $sanitizedString;
}


//Another example
function do_sanitize_swedish_name_alt($nameToSanitize)
{


    //$inputString = "örjan";
    $inputString = $nameToSanitize;
    $inputString = trim($inputString);
    $inputString = mb_strtolower($inputString);
    //echo $inputString;
    $firstCharacter = mb_strtoupper(mb_substr($inputString, 0, 1, "UTF-8"), "UTF-8");
    $restOfString = mb_substr($inputString, 1, null, "UTF-8");
    $transformedString = $firstCharacter . $restOfString;

    return $transformedString;

}

echo do_sanitize_swedish_name_alt("  öALle  ");
