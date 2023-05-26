<?php
declare(strict_types=1);

//Good rule is to match you namespaces with your folder structure, not requirement but
//highly recommended
namespace featuresinphp\model\Gio;
class Transaction
{
    /*
    private float $amount;
    private string $description;

    public function __construct($amount, $description)
    {
        $this->$amount = $amount;
        $this->description = $description;
    }
    */

    //Constructor property promotion is a feature that reduces the upper code portion into the lower code portion
// >php 8.0

    public function __construct(private float $amount, private string $description)
    {
                
    }


    public static function descriptionTransaction()
    {
        return "Make $$$ make $$$ make $$$!!!";
    }

    public function makeTransaction()
    {
        return "Transaction is underway";
    }

}

    
    
    


    echo "Demo Constructor property promotion!<br>";

