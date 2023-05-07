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

$month = 3;
switch ($month) {
    case 1:
        echo 'Januari';
        break;
    case 2:
        echo 'Febuari';
        break;
    case 3:
        echo 'Mars';
        break;
    case 4:
        echo 'April';
        break;
    case 5:
        echo 'May';
        break;
    case 6:
        echo 'June';
        break;
    default:
        echo 'Invalid choice';
}

?>
