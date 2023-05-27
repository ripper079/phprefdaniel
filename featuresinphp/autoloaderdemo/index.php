<?php

declare(strict_types=1);

//PS Remember that this is file location
//PS This is very dependent on folder structure
//require_once './Notification/Email.php';
//require_once __DIR__ . '/Notification/Email.php';

//Toogle   require_once './Notification/Email.php';     to se this feature
spl_autoload_register(function ($class) {
    //Build last portion of the file path
    $endPath = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    $parts = explode(DIRECTORY_SEPARATOR, __DIR__);
    $numberElements = count($parts);

    $buildBasePath="";
    //We skip last portion of the string
    for($i = 0; $i < ($numberElements-1); $i++) {
        $buildBasePath = $buildBasePath . $parts[$i] . DIRECTORY_SEPARATOR;
    }

    $completetPath = $buildBasePath . $endPath;
    echo $completetPath;
});


use Autoloaderdemo\Notification\Email;

new Email();

//echo __DIR__;
