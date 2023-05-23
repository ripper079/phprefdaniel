<?php

/*
Some magic constants
__DIR__ : Represents the directory of the current PHP script
__FILE__: Represents the full path and filename of the script file.
__LINE__: Represents the current line number in the script.
__FUNCTION__: Represents the name of the current function.
__CLASS__: Represents the name of the current class.
__TRAIT__: Represents the name of the current trait.
__METHOD__: Represents the name of the current method.
__NAMESPACE__: Represents the name of the current namespace

*/


echo __DIR__ ."<br>";
//Scan files and directoris inside the specified path 
$dir = scandir(__DIR__);
echo "<pre>";
var_dump($dir);
echo "</pre>";

var_dump(is_file($dir[3]));
echo "<br>";
var_dump(is_dir($dir[25]));


//Create directory
mkdir("foobardir");
//Delete directory - Directory must be empty for this to work
rmdir("foobardir");

if ()
?>