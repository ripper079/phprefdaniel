<?php

//enforce strict typing in PHP functions
declare(strict_types=1);

//PHP supports break and continue
//It is possible to access by reference. Add & in front of the variable
//It is also possible to use : (colon) to achieve pair of brackets {}. Remember to end it with endforeach;

echo "Demo while loops <br />";
$j= 0;
while($j < 8) {
    echo 'Number:' . $j . '<br>';
    $j++;
}
echo '<br>' . '<br>';


echo "Demo do while loops<br />";
$k=0;
do {
    echo "number= " . $k . "<br/>";
    $k++;
} while($k < 5);
echo '<br>' . '<br>';


echo "Demo for loops <br />";
for ($i = 0; $i <= 5; $i++) {
    echo $i . '<br>';
}
echo '<br>' . '<br>';

echo "Demo for loops with regular keys of type integer in arrays<br />";
$posts = ['First', 'Second', 'Third'];
$countPosts = count($posts);
for ($i = 0; $i < $countPosts ; $i++) {
    echo $posts[$i] . '<br>';
}
echo '<br>' . '<br>';

echo "Demo foreach loops without keys<br/>";
foreach($posts as $aPost) {
    echo $aPost . '<br>';
}
unset($aPost);      //aPost is actually in scope. PS this is very dangerous if you accessing the array by reference
echo '<br>' . '<br>';

echo "Demo foreach loops WITH integer index(key)<br/>";
foreach($posts as $index => $aPost) {
    echo $index . '-' . $aPost . '<br>';
}
//Important step todo for $index and $aPost defined in loop because they are actually in scope!!!
unset($index);
unset($aPost);
echo '<br>' . '<br>';

//Associate array
$aCoolPerson = ['firstName' => 'Daniel', 'lastName' => 'Oikarainen', 'age' => 43, 'children' => true];
echo "Key - Value pair <br>";
echo "---------------------------------------------------<br>";
foreach($aCoolPerson as $key => $value) {
    echo "$key - $value<br>";
}
//Important step todo for $key and $value defined in loop because they are actually in scope!!!
unset($key);
unset($value);
echo '<br>' . '<br>';

//'Unintended' change by reference
echo "Demonstration of change the value by reference<br />";
$arrayNumbers = ['one', 'ten', 'hundred', 'thousand'];
foreach ($arrayNumbers as  &$value) {
    echo "Value is=" . $value . "<br />";
}
echo '<br>';
$value = "Hack a million";      //Hard 'bug' to catch
foreach ($arrayNumbers as  &$value) {
    echo "Value is=" . $value . "<br />";
}
echo '<br><br>';


$stringOfNumbers = ['one' => 1, 'ten' => 190, 'hundred' => 100, 'thousand' => 1000];
//Keys can NOT be reference type in for loops
foreach ($stringOfNumbers as $key => &$value) {
    echo "Key=" . $key . " Value=" . $value . "<br />";
}
unset($key);
echo '<br>';
$value = 10_000_000;            //Bug bug bug...
foreach ($stringOfNumbers as $key => &$value) {
    echo "Key=" . $key . " Value=" . $value . "<br />";
}
echo "<br /> <br />";

$userAdmin = [
    'name' => "Daniel",
    'male' => true,
    'skills' => ['php', 'wordpress', 'c sharp'],
];

foreach ($userAdmin as $key => $value) {
    echo $key . ": ";
    if (is_array($value)) {
        foreach($value as $skill) {
            echo $skill . " ";
        }
    } else {
        echo $value;
    }
    echo "<br />";
}
