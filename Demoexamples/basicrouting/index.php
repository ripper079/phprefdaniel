<?php

//Work in Progress

//In order for this project to work you need to
//  1. Enable rewrite_module in file httpd.conf
//              LoadModule rewrite_module modules/mod_rewrite.so
//  2. Create/Edit the .htaccess file [PS This is made on the project folder]
//              RewriteEngine On
//              RewriteCond %{REQUEST_FILENAME} !-d
//              RewriteCond %{REQUEST_FILENAME}.php -f
//              RewriteRule ^(.+)$ $1.php [L]


declare(strict_types=1);

namespace AppRouteDaniel;

const BASE_ROOT_URL = '/phprefdaniel/demoexamples/basicrouting';

require_once('./Router.php');

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$router = new \AppRouteDaniel\Router();


$router->register('/abc', function () {
    echo "ORIGINAL Home";
});


// $router->register('/phprefdaniel/demoexamples/basicrouting' . '/', function () {
//     echo "OO yyeehh HOME PAGE";
// });

$router->register(BASE_ROOT_URL . '/', function () {
    echo "OO yyeehh HOME PAGGGGGEEE";
});


$router->register(BASE_ROOT_URL . '/foo', function () {
    echo "Foo";
});


//$router->printRegistedRoutes();
//echo $router->resolve($_SERVER['REQUEST_URI']);


$router->printRegistedRoutes();
echo "Current URI=" . $_SERVER['REQUEST_URI'];
