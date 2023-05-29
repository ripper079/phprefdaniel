<?php

declare(strict_types=1);

//Fully Qualified Namespace if prefixed with "/"  ei
//     \features\

require_once './model/Transaction.php';
require_once './model/Movie.php';

echo "Namespaces demo<br>";

//Qualified Class Name - Always works
//echo featuresinphp\model\Gio\Transaction::descriptionTransaction() . "<br>";

//import would not be needed if classes belong to the same namespace e.i Models
//import the class(es)
use featuresinphp\model\Gio\Transaction;

$myTransaction = new Transaction(200.00, "Newpapaer subscription");

echo $myTransaction->makeTransaction();


$myMoviePick = new featuresinphp\model\Gio\Movie("Terminator 666");
