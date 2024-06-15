<?php
/*
  SuperGlobal = Built in variables that are always available within ALL scopes throughout your php code

  $GLOBALS - A superglobal variable that holds information about any variables in global scope.

  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

//var_dump($GLOBALS);
//var_dump($_GET);
//var_dump($_REQUEST);

//var_dump($_SERVER);

//Extract data from URL - Simulate this be input extra data in URL with e.i      ?food=pizza&eyecolor=bluey
if (isset($_GET["food"]))
  echo $_GET["food"] . "<br>";
if (isset($_GET["eyecolor"]))
    echo $_GET["eyecolor"] . "<br>";

//$mySQLHomeDir = $_SERVER['MYSQL_HOME'];



//You cant extract value from a defined contant in the superglobal variable $GLOBAL
define('MY_FULLNAME_CONSTANT', 'DANIEL OIKARAINEN');
//Here it is OK
$globalCarName = "Toyotaaaa";
echo "<pre>";
print_r($_SERVER);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <strong><?php echo $_SERVER['HTTP_HOST']; ?></strong></li>
    <li>Document Root: <strong><?php echo $_SERVER['DOCUMENT_ROOT']; ?></strong></li>
    <li>System Root: <strong><?php echo $_SERVER['SystemRoot']; ?></strong></li>
    <li>Server Name: <strong><?php echo $_SERVER['SERVER_NAME']; ?></strong></li>
    <li>Server Port: <strong><?php echo $_SERVER['SERVER_PORT']; ?></strong></li>
    <li>Current File Dir: <strong><?php echo $_SERVER['PHP_SELF']; ?></strong></li>
    <li>Request URI: <strong><?php echo $_SERVER['REQUEST_URI']; ?></strong></li>
    <li>Server Software: <strong><?php echo $_SERVER['SERVER_SOFTWARE']; ?></strong></li>
    <li>Client Info: <strong><?php echo $_SERVER['HTTP_USER_AGENT']; ?></strong></li>
    <li>Remote Address: <strong><?php echo $_SERVER['REMOTE_ADDR']; ?></strong></li>
    <li>Remote Port: <strong><?php echo $_SERVER['REMOTE_PORT']; ?></strong></li>    
    <li>Global scope variable = <strong><?= $GLOBALS['globalCarName'] ?></strong></li>
  </ul>
</body>
</html>