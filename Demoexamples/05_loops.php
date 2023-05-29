<?php
//enforce strict typing in PHP functions
declare(strict_types = 1); 

//PHP support break and continue

for ($i = 0; $i <= 5; $i++)
{
    echo $i . '<br>';
}
echo '<br>' . '<br>';

$j= 0;
while($j < 8)
{
    echo 'Number:' . $j . '<br>';
    $j++;
}
echo '<br>' . '<br>';

$posts = ['First', 'Second', 'Third'];
for ($i = 0; $i < count($posts) ; $i++)
{
    echo $posts[$i] . '<br>';
}
echo '<br>' . '<br>';

foreach($posts as $aPost)
{
    echo $aPost . '<br>';
}
echo '<br>' . '<br>';
foreach($posts as $index => $aPost)
{
    echo $index . '-' . $aPost . '<br>';
}

//Associate array
$aCoolPerson = [
    'firstName' => 'Daniel',
    'lastName' => 'Oikarainen',
    'age' => 43,
    'children' => true
];
echo '<br>' . '<br>';
echo "key - value pair <br>";
echo "---------------------------------------------------<br>";
foreach($aCoolPerson as $key => $value)
{
    echo "$key - $value<br>";
}

?>
