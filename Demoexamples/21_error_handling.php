<?php

//Fatal Error
//Syntax error
//Notices
//parsers..

//Some error stop the execution of script like fatal error
//Some not like warnings

//Php reports/handles error based on the configuration php.ini but can be overridden be calling
//error_reporting(E_ALL);        //parameter passed is error level, se page https://www.php.net/manual/en/errorfunc.constants.php

//Error can be triggered manually with
//trigger_error('Example', E_USER_ERROR);         //Halt imediately
// trigger_error('Example', E_USER_WARNING);       //But not this
// echo "Error handling demo....";

//Directive that determines wheter error messages shuld be display or not. Only use this at development level. Do NOT turn this on for production, sensitive info should not be displayed.
//This messages will be logged
//display_errors


//ERROR handling
function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null)
{
    echo $type . ": " . $msg . " in " . $file . " on line" . $line . "<br>";

    exit;
}

set_error_handler('errorHandler', E_ALL);
