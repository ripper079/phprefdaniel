<?php

/*
    Shows a custom iteration of an object
*/

//declare(strict_types=1);

#namespace fooiterator;

class FooInvoice
{
    private int $secretNumber = 0;
    private int $inheretSecret = 0;
    public int $id;

    public function __construct(public float $amount)       //Constructor property promotion
    {
        $this->id = random_int(10000, 99999);
        $this->secretNumber = random_int(100,1000);
    }
}

class InvoiceCollection implements \Iterator
{
    public array $invoices;

    public function __construct(array $invoices)
    {        
        $this->invoices = $invoices;
    }

    //START - Implementation of Iterator
    public function current(): mixed 
    {
        echo __METHOD__ . PHP_EOL;
        return current($this->invoices);
    }
    
    public function key(): mixed 
    {
        echo __METHOD__ . PHP_EOL;
        return key($this->invoices);
    }

    public function next(): void 
    {
        echo __METHOD__ . PHP_EOL;
        next($this->invoices);
    }
    
    public function rewind(): void 
    {
        echo __METHOD__ . PHP_EOL;
        reset($this->invoices);
    }

    public function valid(): bool 
    {
        echo __METHOD__ . PHP_EOL;
        return current($this->invoices) !== false;
    }
    //STOP - Implementation of Iterator
}





//Prettier output in cli or html
// $flexLineBreak = "<br>";
$flexLineBreak = PHP_EOL;

/*
foreach(["luckynumber" => 999, "unluckynumber" => 13, "devilsnumber" => 666, "emergency" => 911] as $key => $value)
{
    echo $key . ' = ' . $value . $flexLineBreak;
}
*/

//Object do NOT iterate over private and protected properties
/*
foreach (new FooInvoice(24.99) as $key => $value) {
    echo $key . ' = ' . $value . $flexLineBreak;
}
*/

$invoiceCollection = new InvoiceCollection([new FooInvoice(15), new FooInvoice(25), new FooInvoice(50)]);
foreach ($invoiceCollection as $key => $invoice) {
    echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
}
