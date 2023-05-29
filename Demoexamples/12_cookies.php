<?php
/*
  Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. 
  You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
  Cookies are stored on client
*/

//key/value and expiration date/time this case 1 day
setcookie('nameofprogrammer', 'Daniel', time() + 86400);

if (isset($_COOKIE['nameofprogrammer'])){
    echo $_COOKIE['nameofprogrammer'];
}

//Unset the cookie
setcookie('nameofprogrammer', '', time() - 86400);

?>
