<?php


class Invoice
{
    public function __construct(public float $amount, public string $description) 
    {
     
    }
}

$invoice1 = new Invoice(25, 'My invoice 1');
$invoice2 = new Invoice(25, 'My invoice 2');
$copyInvoice = $invoice1;

echo 'invoice1 == invoice2' . PHP_EOL;           //comparison operator (with loose comparison)
var_dump($invoice1 == $invoice2);               //Only equal if have same type and state (same values AND properties)

echo 'invoice1 === invoice2' . PHP_EOL;          //identity operator
var_dump($invoice1 === $invoice2);              //Only equal if the refer/point to the same object
echo PHP_EOL . PHP_EOL;

echo 'invoice1 == copyInvoice' . PHP_EOL;           //comparison operator (with loose comparison)
var_dump($invoice1 == $copyInvoice);               //Only equal if have same type and state (same values AND properties)

echo 'invoice1 === copyInvoice' . PHP_EOL;          //identity operator
var_dump($invoice1 === $copyInvoice);              //Only equal if the refer/point to the same object




