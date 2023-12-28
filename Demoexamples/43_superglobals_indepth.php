<?php

/*
SuperGlobal = Built in variables that are always available within ALL scopes throughout your php code
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
*/


declare(strict_types=1);


//Prettier output in cli or html
// $flexLineBreak = "<br>";
$flexLineBreak = PHP_EOL;

# namespace /Daniel/SuperGlobal;


function printSuperGlobal_SERVER(): void
{
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
}
 
function  printSuperGlobal_ENV(): void
{
    global $flexLineBreak;
    //This code section is always empty...
    echo '<pre>';
    print_r($_ENV);
    echo '</pre>';

    //Not work
    //echo "Operation System=" . $_ENV["OS"]  . $flexLineBreak;
    //But this do
    echo "Operation System=" . getenv("OS") . $flexLineBreak;

    //This code section is always empty...
    echo '<pre>';
    print_r(getenv());
    echo '</pre>';
}

// try append  ?food=pizza&eyecolor=blue
function printSuperGlobal_GET():  void 
{
    echo "First parameter=" . $_GET["foo"] . ", Second parameter=" . $_GET["weather"] . "<br><br>";

    var_dump($_GET);
}

function setAndPrintSuperGlobal_SESSION()
{    
    //The session expiration time is set in php.ini with the directive
    //session.gc_maxlifetime=1440 ; Set session expiration to 30 minutes (1800 seconds)

    $_SESSION['abrakadabra'] = "Magic";
    $_SESSION['motto'] = "Never surrender";
    $_SESSION['sport'] = "Ice hockey";
    $_SESSION['bad'] = "the devil";
    //Well on second thought better remove it
    unset($_SESSION['bad']);

    var_dump($_SESSION);
}

function setAndPrintSuperGlobal_COOKIE()
{
    $cookieExpirationTime = 10;       //in seconds
    setcookie('sport', 'fotball', time() + 10);
    
}


//This superglobals gives tons of information, experiment with it with example of query string
# printSuperGlobal_SERVER();         //Key/Value pair may vary from server to server. Ps try to append ?user=Daniel+Mikael+Oikarainen&Food=Beef to the query string and se how values changes...
# printSuperGlobal_ENV();
//The next to 
# printSuperGlobal_GET();          //In URL try append  ?food=pizza&eyecolor=blue
# printSuperGlobal_POST();     //In the POST request the data gets added/appended to the body instead. Check the folder Forms for an example of POST request
# printSuperGlobal($_REQUEST);  //

# setAndPrintSuperGlobal_COOKIE();   //Cookies are stored on the client side(user side). Dies
# setAndPrintSuperGlobal_SESSION();  //Session are stored on the server side. Dies on the soon as the browser is closed.


session_start();

// echo "Mikael";
// echo "Jackson";
// sleep(1);
// echo "SuperRich";

//setAndPrintSuperGlobal_SESSION();
setAndPrintSuperGlobal_COOKIE();
