<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//https://www.php.net/manual/en/ref.array.php

//Make the array visual readable
function printPrettyArray($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

# array_key_exists($key, $array)
#   checks if the KEY $key is present in the $array. Returns true/false

# in_array($element, $array)
#   checks if the element $element(the value) is present in the $array. Return true/false 

# array_search($value, $array)
#   Search in the array for the VALUE $value if present
#   Return: The FIRST found key for the corresponding $value. If nothing is found then it returns false
#   Caution: May be multiple keys that has the same value. Only first found is returned

# array_keys()
#   Does NOT change original array
#   Creates a NEW array based on the indices/keys. The new array will have new keys started from index 0
#       ["Daniel" => 43, "Joe Doe" => 65, "Jessica" => 12, "Per" => 3] 
#       [0 => "Daniel", 1 => "Joe Doe", 2 => "Jessica", 3 => "Per"] OR ["Daniel", "Joe Doe", "Jessica", "Per"]

# array_values()
#   Does NOT change original array
#   Creates a NEW array based on the same values BUT it reindex the keys so they start at 0 and increments with one
#   ["1979-02-27" => "Daniel Oikarainen", "1958-05-05" => "Joe Doeee", "2002-10-28" => "Pelle Svensson"] 
#   [0 => "Daniel Oikarainen", 1 => "Joe Doeee", 2 => "Pelle Svensson"]   //OR
#   ["Daniel Oikarainen", "Joe Doeee", "Pelle Svensson"] 



//Has keys 0,1,2,3,4
$luckyNumber = [69, 79, 999, 12, 16];       
//Has keys "nineteen", "two", "thirtythree", "twentysix"
$speakNumbers =[
    "nineteen" => 19,                   
    "two" => 2,
    "twelwe" => 12,
    "thirtythree" => 33,
    "twentysix" => 26
];  

$prospectNumber = 12;   //
$prospectSpeakNumber = "twelwe";

#----------------------------------------------    array_key_exists() ---------------------

//Do Not confuse keys with values
$resultKeyPresent = (array_key_exists($prospectNumber, $luckyNumber)) ? "The key exists" : "The key IS MISSING";
echo $resultKeyPresent;             //"The key IS MISSING"

echo "<br>";
$resultKeyPresent = (array_key_exists($prospectNumber, $speakNumbers)) ? "The key exists" : "The key IS MISSING";
echo $resultKeyPresent;             //"The key IS MISSING"

echo "<br>";
$resultKeyPresent = (array_key_exists($prospectSpeakNumber, $speakNumbers)) ? "The key exists" : "The key IS MISSING";
echo $resultKeyPresent;                 //"The key exists"

#----------------------------------------------    in_array() ---------------------
echo "<br>";
$resultValuePresent = (in_array($prospectNumber, $luckyNumber)) ? "The value is present" : "Missing VALUE!!!";
echo $resultValuePresent;               //"The value is present"

echo "<br>";
$resultValuePresent = (in_array($prospectNumber, $speakNumbers)) ? "The value is present" : "Missing VALUE!!!";
echo $resultValuePresent;               //"The value is present"


#----------------------------------------------    array_search() ---------------------
$foundElementKey = array_search(12, $speakNumbers);
if ($foundElementKey)
{
    echo "<br>" . " The key is: " . $foundElementKey . " with the value " . $speakNumbers[$foundElementKey];
}


#----------------------------------------------    array_keys() ---------------------
$newArrayKeysBecomeValue = array_keys($speakNumbers);
printPrettyArray($newArrayKeysBecomeValue);       // [ 0 => "nineteen",  1 => "two", 2 => "twelwe", 3 => "thirtythree", 4 => "twentysix" ]


#----------------------------------------------    array_values() ---------------------
$newArrayKeysReIndex = array_values($speakNumbers);
printPrettyArray($newArrayKeysReIndex);         //[0 => 19, 1 => 2, 2 => 12, 3 => 33, 4 => 26] OR [19, 2, 12, 33, 26]

