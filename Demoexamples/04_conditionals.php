<?php
//enforce strict typing in PHP functions
declare(strict_types = 1); 

// $points = 10;
// if ($points < 2)
// {
//     echo 'You failed';
// }
// elseif($points < 5)
// {
//     echo 'You passed';
// }
// elseif ($points <= 9)
// {
//     echo 'Passed with destinction';
// }
// else 
// {
//     echo 'PERFECT';
// }

// $month = 3;
// switch ($month) {
//     case 1:
//         echo 'Januari';
//         break;
//     case 2:
//         echo 'Febuari';
//         break;
//     case 3:
//         echo 'Mars';
//         break;
//     case 4:
//         echo 'April';
//         break;
//     case 5:
//         echo 'May';
//         break;
//     case 6:
//         echo 'June';
//         break;
//     default:
//         echo 'Invalid choice';
// }

//Be careful when using =, == and ===
// = is assingment
// == is comparison without considering datatypes
// === is comparison with considering datatypes
$num = 5;
$str = "5";

// Using the equality operator ==
/*
if ($num == $str) {
    echo "Equal (==): The values are equal when compared without considering data types.";
} else {
    echo "Not Equal (==): The values are not equal.";
}

echo "<br>";

// Using the identity operator ===
if ($num === $str) {
    echo "Equal (===): The values are equal and of the same data type.";
} else {
    echo "Not Equal (===): The values are either not equal or not of the same data type.";
}
*/

//Match
$bb = 1;
$cc = 4;

$result = match ($bb){
    1 => "Variable is equal to one!",
    2 => "Variable is equal to two!",
    3 => "Variable is equal to three!",
    4 => "Variable is equal to four!",
    default => "None match at all"
};
echo $result;

?>
