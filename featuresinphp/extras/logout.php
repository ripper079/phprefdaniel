<?php
session_start();

// destroy the session
session_destroy();
//Redirection
header('Location: /phprefdaniel/featuresinphp/13_sessions.php');

?>
