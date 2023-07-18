<?php

//These statements handle how imports of file is made
//require, require_once, include, include_once
//require failure will stop execution of the script
//include failure will result in warning but continue execution of script

//The include statements actually return a value indication if including was a success of failure
//On failure it returns false and on success it returns 1 (unless you are return something different i the included file, customization is possible)


//Below statement includes files only once (e.i useful so not declaring multiple same classes)
require_once '98_dummy_file.php';
require_once '98_dummy_file.php';
require_once '98_dummy_file.php';

//But the 2 below get ALWAYS included
require '98_dummy_file.php';
require '98_dummy_file.php';
$statusFileExisting = include '98_dummy_file.php';          //returns 1



$statusNonexistingFile =  include 'afilethatdoesnotexists.php'; //return false
var_dump($statusNonexistingFile, $statusFileExisting);
echo "Hello First time";
require 'afilethatdoesnotexists.php';
//The next statement will never get executed. Script execution stops here
echo "Hello again...not";
