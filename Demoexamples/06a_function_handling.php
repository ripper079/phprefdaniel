<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//Make the array visual readable
function print_pretty_array($array): void
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}




//Normal function
function sag_hej()
{
    echo "Hej!<br>";
}

// Function with parameter
function sag_hej_kompis($pKompisForname, $pKompisEfternamn)
{
    echo "Hej " . $pKompisForname . " " . $pKompisEfternamn .  ", hur mår du?<br>";
}




// 1
# function_exists($functionName)
#   Returns true or false
#   Checks if $functionName has been defined


// 2
# is_callable($functionVariable)
#   $functionVariable should have a string content that is the same as the defined function
#   Checks if $functionName has been defined

// 3
# call_user_func($callableFunc, ...$args)
#   calls the dynamically the function specified in the $callableFunc (string) variable with the argument(s) $args

// 4
# func_num_args()
#   Returns number of arguments passed to the function. If Default value is applied to the parameter, then it is excluded

// 5
# func_get_args($callableFunc, ...$args)
#   Returns an array(regular 0 based) with the passed values. If Default value is applied to the parameter, then it is excluded

// 6
# func_get_arg($pKeyIndexNumberic)
#   Return the value at the index position $pKeyIndexNumberic (zero based). If Default value is applied to the parameter, then it is excluded

/*
// 1
if (function_exists('raknautskatt'))
{
    raknautskatt();
}
else
{
    echo "That function has NOT been defined<br>";
}
*/

/*
// 2
$prospectFunction = "sag_hej_kanske_gar";

echo (is_callable($prospectFunction)) ? "The fuction exists<br>" : "The function does NOT exist<br>";       // The function does NOT exist
*/

/*
// 3
$nyProspectFunction = "sag_hej_kompis";
call_user_func($nyProspectFunction, "Danne", "Svensson");           // Hej Danne Svennson, hur mår du?
*/

/*
// 4, 5, 6
function rakna_argumenten($pEtt, $pTva, $pTre = "")
{
    $countArguments = func_num_args();
    //echo "Number of arguments: " . $countArguments . "<br>";        // 3
    //Witk key and value
    $listAllArgs = func_get_args();
    //print_pretty_array($listAllArgs);     // 0 => Mikael, 1 => Eriksson, 2 => 44 ]
    // Here it zero based
    $getSecondArg = func_get_arg(1);
    echo "The second argument is: " . $getSecondArg . "<br>";       // Eriksson
}

rakna_argumenten("Mikael", "Eriksson", 44);     //Se output in the function rakna_argumenten
*/
