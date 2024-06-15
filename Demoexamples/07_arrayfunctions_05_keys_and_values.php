<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//https://www.php.net/manual/en/ref.array.php

//Make the array visual readable
function print_pretty_array($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

# array_combine($arraySourceKeys, $arraySourceValues)
#   Returns a new array, do NOT modify $arraySourceKeys and $arraySourceValues
#   Creates a new array and using the content in both arrays as data for key and value pair
#   Note both arrays need to be the same size


# array_flip($arraySource)
#   Returns a new array, do NOT modify $arraySource
#   The new array with contain the flipped content. The $arraySource keys will be the value in the new array and the $arraySource values will be keys in the new array
#   Note: The values the $arraySource need to be valid keys, either int or string


# array_keys($arraySource)
#   Does NOT change original array
#   Creates a NEW array based on the KEYS in $arraySource. The KEYS in the $arraySource will be the new value in the newly created array.


# array_values($arraySource)
#   Does NOT change original array
#   Creates a NEW array based on the VALUES in $arraySource. The VALUES in the $arraySource will be the new value in the newly created array.



echo "Hello world<br>";


$names = ['Danne', 'John', 'Jen', 'Alex'];
$bornYear = [1979, 1968, 1995, 2002]; 

$socialSecurityData = array_combine($names, $bornYear);
$flipsocialSecurity = array_flip($socialSecurityData);


print_pretty_array($socialSecurityData);    // [ "Danne" => 1979, "John" => 1968, "Jen" => 1995, "Alex" => 2002 ]
print_pretty_array($names);                 // [ 0 => Danne, 1 => John, 2 => Jen, 3 => Alex ]
print_pretty_array($bornYear);              // [ 0 => 1979, 1 => 1968, 2 => 1995, 3 => 2002 ]
print_pretty_array($flipsocialSecurity);    // [ 1979 => Danne, 1968 => John, 1995 => Jen, 2002 => Alex ]


echo "End of world";